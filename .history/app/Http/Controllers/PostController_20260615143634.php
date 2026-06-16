<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = "Bienvenue Chez Dawan";

        $description = ""

        return view('blog');
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
