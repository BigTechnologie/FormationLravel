<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $title = "Bienvenue Chez Dawan";

        $description = "<h3>Bienvenue dans la sdescription du Framework Lraravel</h3>";

        //$posts = Post::all();

        // Manipulation des articles
        //$post = Post::find(1); return $post; dd($post);

        //$posts = Post::where('id', '>', 2)->get();
        //$posts = Post::where(['title' => 'new post 6'])->get();
        //$posts = Post::where('title', 'like', '%post%')->get();

        // Pour paginer
        //$posts = Post::paginate(2); return $posts;

        // Modification des données
        $post = Post::find(1); $post->title = 'Bienvenue sur notre Applacation Symfony-Laravel'; $post->save(); return $post;

        // Suppression d'un article
        $post = Post::find(3); if($post) { $post->dele }

        //return view('blog', ['title' => $title, 'description' => $description, 'posts' => $posts]);
    }

    public function hello(): ?string
    {
        return 'Hello Dawan 2026';
    }

    public function show(string $slug, int $id) 
    {
        return [
            'slug' => $slug,
            'id' => $id
        ];
    }

    public function data(Request $request) 
    {
        return [
            'name' => $request->input('names', 'Jean'),
            'value' => $request->input('value', '25'),
            'all' => $request->all()
        ];
    }

    public function new ()
    {
        return to_route('post.show', ['id' => 35, 'slug' => 'formation-laravel']);
    }


}
