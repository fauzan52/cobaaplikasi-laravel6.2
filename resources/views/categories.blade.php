@extends('layouts.main')
@section('container')
<h1 class-"mb-5">Post Categories: </h1>
<br>
@foreach ($categories as $category)
<h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
@endforeach
@endsection

