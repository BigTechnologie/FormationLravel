@extends('base')

@section('title')
    {{ $post->title }}
@endsection

@section('container')
    <h1>{{ $post->title }}</h1>
@endsection