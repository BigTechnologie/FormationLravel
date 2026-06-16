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

        $posts = [
            [
                "id" => 1,
                "title" => 'new post 1',
                "description" => 'new post description 1',
                "imageUrl" => 'https://picsum.photos/300'
            ],
            [
                "id" => 2,
                "title" => 'new post 2',
                "description" => 'new post description 2',
                "imageUrl" => 'https://picsum.photos/300'
            ],

            [
                "id" => 3,
                "title" => 'new post 3',
                "description" => 'new post description 3',
                "imageUrl" => 'https://picsum.photos/300'
            ],
            
            [
                "id" => 4,
                "title" => 'new post 4',
                "description" => 'new post description 4',
                "imageUrl" => 'https://picsum.photos/300'
            ],

        ];

        $post = new Post();
        $post->title = 'new article 1';
        $post->description = 'new description 4';
        $post->content = ''

        return view('blog', ['title' => $title, 'description' => $description, 'posts' => $posts]);
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
