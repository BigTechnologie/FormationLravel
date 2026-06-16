@extends('base')

@section('title')
    {{ $post->title }}
@endsection

@section('container')
    <h1>{{ $post->title }}</h1>

    <div class="post-img">
        <img src="{{ $post->imageUrl }}" class="img-fluid card" width="100px" height="200px" alt="">
    </div>
    <strong>{{ $post->created_at->format("d-m-Y H::s") }}</strong>
    <div class="post-content text-justify">
        {{ $post->content }}
    </div>
@endsection