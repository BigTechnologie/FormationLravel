@extends('base')

@section('title')
    Laravel home page
@endsection

@section('container')
    <div class="container">
        <h1> {{ $title }} </h1>

        {!! $description !!}
        <div class="posts row border">
            @foreach ( as )
                
            @endforeach
        </div>

    </div>
@endsection


