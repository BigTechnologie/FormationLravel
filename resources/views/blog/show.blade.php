@extends('base')

@section('title')
    {{ $post->title }}
@endsection

@section('container')
    <h1>{{ $post->title }}</h1>

    
    <div class="post-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
        <img src="{{ Str::startswith($post->imageUrl, 'http') ? $post->imageUrl : Storage::url($post->imageUrl) }}"
            alt="Prévisualisation de l'image"
            style="max-width: 100px; display:block;">
    </div>
    <strong>{{ $post->created_at->diffForHumans() }}</strong>
    <div class="post-content text-justify">
        {!! $post->content !!}
    </div>
@endsection