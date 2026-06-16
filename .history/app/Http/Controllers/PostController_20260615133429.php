<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
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
            'name' => $slug,
            'id' => $id
        ];
    }


}
