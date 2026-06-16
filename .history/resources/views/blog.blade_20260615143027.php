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

                    <div class="post-item col-md-3 card pair">
                        <img src="{{ $post['imageUrl'] }}" alt="s">
                        
                    </div>
                    
                @endif
            @endforeach
        </div>

    </div>
@endsection


