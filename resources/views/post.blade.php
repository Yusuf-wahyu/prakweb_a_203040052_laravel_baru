@extends('layouts.main')

@section('container')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By. <a href="/authors/{{ $post->author->username }}" class=text-decoration-none>{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }} "class=text-decoration-none> {{ $post->category->name   }}</a></p>
                
                    {!! $post->body !!}
                
                <a href="/posts" c;ass="d-block mt-3">Back to posts</a>
        </div>
    </div>
</div>
 

@endsection
