@extends('base')

@section('title')
    {{ $post->title }}
@endsection

@section('container')
    <h1>{{ $post->title }}</h1>

    <div class="post-img">
        <img src="{{ $post->imageUrl }}" class="img-fluid card" width="100px" height="1" alt="">
    </div>
@endsection