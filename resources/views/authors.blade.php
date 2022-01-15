@extends('layouts.main')
@section('container')
<h1 class-"mb-5">List Authors : </h1>
@foreach ($categories as $category)
<h2><a href="/authors/{{ $author->name }}">{{ $author->name }}</a></h2>
@endforeach
@endsection

