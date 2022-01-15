@extends('layouts.main')

@section('container')
<article>
<h2>{{ $title }}</h2>
    <br>
    <h3>
        <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a>
    </h3>
    <h5>By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a></h5>
<h4>Kategori : <a href="#" class="text-decoration-none">{{ $post->category->name }}</a></h4>
{!! $post->body !!}
</article>

<a href="/posts"> Back </a>
@endsection
