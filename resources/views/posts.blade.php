@extends('layouts.main')
@section('container')
<h1 class="mb-3">{{ $title }}</h1>
<br>
@if($posts->count())
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <h10 class="card-text">By: {{$posts[0]->user->name}}</h10>
            <br>
            <h10 class="card-text">Category : {{ $posts[0]->category->name }}</h10>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
@else
    <p class="text-center fs-4">Post not found</p>
@endif

@foreach ($posts as $post)
    <article class="mb-5">
    <h3>
        <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a>
    </h3>
    <h10>
        By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a>
    </h10>
        <br>
    <h10>
        Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </h10>
    <br>
    {{ $post->excerpt }}
    <br>
    <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">Read more ... </a>
</article>
@endforeach
@endsection

