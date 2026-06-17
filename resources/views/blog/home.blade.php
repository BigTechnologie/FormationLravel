@extends('base')

@section('title')
    Laravel home page
@endsection

@section('container')
    <div class="container">
        <h1> {{ $title }} </h1>

        {!! $description !!}

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        

        <div class="posts row gx-0">
            @foreach ($posts as $post)
                <div class="post-item col-md-3">
                    <a href="{{ route('blog.show', ['id' => $post->id, 'slug' => $post->slug]) }}" class="m-1 card text-decoration-none">
                        <div class="m-1 card">
                            <img src="{{ Str::startswith($post->imageUrl, 'http') ? $post->imageUrl : Storage::url($post->imageUrl) }}" height="200px" alt="">    
                            <div class="post-details p-1">
                                <h4> {{ $post->title }} </h4>
                                <p> {{ $post->description }} </p>
                                <small>{{ $post->created_at->format("d-m-Y H:i:s") }}</small>
                            </div>
                            
                        </div> 
                    </a>     
                </div>    
            @endforeach
        </div>

        @include('paginate', ['datas' => $posts])

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


