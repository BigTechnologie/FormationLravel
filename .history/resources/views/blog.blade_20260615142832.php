@extends('base')

@section('title')
    Laravel home page
@endsection

@section('container')
    <div class="container">
        <h1> {{ $title }} </h1>

        {!! $description !!}
        <div class="posts row border">
            @foreach ($posts as $post)
                @if ($post['id'] % 2 == 0)

                @else

                    <div></div>
                    
                @endif
            @endforeach
        </div>

    </div>
@endsection


