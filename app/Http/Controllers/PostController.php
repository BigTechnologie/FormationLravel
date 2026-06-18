<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

class PostController extends Controller
{

    private const POSTS_CACHE_KEY = 'posts_all_array';
    private const CACHE_DURATION_MINUTES = 10;
    
    public function index(): View
    {

        $page = (int) request()->input('page', 1);

        $perPage = 8;

        $postsData = Cache::remember(
            self::POSTS_CACHE_KEY, 
            now()->addMinutes(self::CACHE_DURATION_MINUTES), 
            function() {
            return Post::orderBy('created_at', 'desc')
                ->get()
                ->map(fn ($post) => $post->toArray())
                ->all();
        });

        $postsCollection = collect($postsData)->map(function($post) {
            return (object) $post;
        });

        // Reconstruire l'objet de pagination
        $posts = new LengthAwarePaginator(
            $postsCollection->forPage($page, $perPage)->values(),
            $postsCollection->count(),
            $perPage,
            $page,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id): View
    {

        $postData = Cache::remember(
            $this->postCacheKey($id), 
            now()->addMinutes(self::CACHE_DURATION_MINUTES), 
            function () use ($id) {
            return Post::findOrFail($id)->toArray();
        });
        
        $post = (object) $postData; // $post->title

        return view('posts.show',['post' => $post]);
    }
    public function create(): View
    {
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
    }

    public function edit($id): View
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    public function store(PostFormRequest $req): RedirectResponse
    {
        $data = $req->validated();

            if ($req->hasFile('imageUrl')) {
        $data['imageUrl'] = $this->handleImageUpload($req->file('imageUrl'));
    }

        $post = Post::create($data);

        Cache::forget(self::POSTS_CACHE_KEY);
        
        return redirect()->route('admin.post.show', ['id' => $post->id])->with("success", "Post has been saved !");
    }

    public function update(Post $post, PostFormRequest $req)
    {
        $data = $req->validated();

            if ($req->hasFile('imageUrl')) {
        // Suppression de l'ancienne image si elle existe
        if ($post->imageUrl) {
            Storage::disk('public')->delete($post->imageUrl);
        }
        $data['imageUrl'] = $this->handleImageUpload($req->file('imageUrl'));
    }

        $post->update($data);

        Cache::forget(self::POSTS_CACHE_KEY);

        Cache::forget($this->postCacheKey($id));

        return redirect()->route('admin.post.show', ['id' => $post->id]);
    }

    public function updateSpeed(Post $post, Request $req)
    {
        foreach ($req->all() as $key => $value) {
            $post->update([
                $key => $value
            ]);
        }

        Cache::forget('posts_all_array');

        Cache::forget($this->postCacheKey($id));

        return [
            'isSuccess' => true,
            'data' => $req->all()
        ];
    }

    public function delete(Post $post)
    {
        if ($post->imageUrl) {
        Storage::disk('public')->delete($post->imageUrl);
    }

        $postId = $post->id;

        $post->delete();

        Cache::forget(self::POSTS_CACHE_KEY);

        Cache::forget($this->postCacheKey($postId));

        return [
            'isSuccess' => true
        ];
    }

    private function postCacheKey(int|string $id): string
    {
        return "post_{$id}";
    }


        private function handleImageUpload(\Illuminate\Http\UploadedFile|array $images): string|array
    {
        if (is_array($images)) {
            $uploadedImages = [];
            foreach ($images as $image) {
                $imageName = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');
                $uploadedImages[] = 'images/' . $imageName;
            }
            return $uploadedImages;
        } else {
            $imageName = uniqid() . '_' . $images->getClientOriginalName();
            $images->storeAs('images', $imageName, 'public');
            return 'images/' . $imageName;
        }
    }
}