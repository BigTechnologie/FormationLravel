@extends('base')

@section('title')
    Laravel home page
@endsection

@section('container')
    <div class="container">
        <h1> {{ $title }} </h1>

        {!! $description !!}

        @include('paginate', ['datas' => $posts])

        <div class="posts row border">
            @foreach ($posts as $post)
                <div class="post-item col-md-3">
                    <div class="post-img">
                            <img src="{{ $post['imageUrl'] }}" alt="s">
                        </div>
                        <h4 class="post-title"> {{ $post['title'] }} </h4>
                        <p> {{ $post['description'] }} </p>    
                </div>    
            @endforeach
        </div>

    </div>
@endsection

{{-- 

<div class="container">
        <h1> {{ $title }} </h1>

        {!! $description !!}
        <div class="posts row border">
            @foreach ($posts as $post)
                @if ($post->id % 2 == 0)

                    <div class="post-item col-md-3 card pair">
                        <div class="post-img">
                            <img src="{{ $post['imageUrl'] }}" alt="s">
                        </div>
                        <h4 class="post-title"> {{ $post['title'] }} </h4>
                        <p> {{ $post['description'] }} </p>
                    </div>


                @else

                    <div class="post-item col-md-3 card impair">
                        <div class="post-img">
                            <img src="{{ $post['imageUrl'] }}" alt="s">
                        </div>
                        <h4 class="post-title"> {{ $post['title'] }} </h4>
                        <p class="post-description"> {{ $post['description'] }} </p>
                    </div>
                    
                @endif
            @endforeach
        </div>

    </div>
 --}}


