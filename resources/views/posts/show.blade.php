@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p class="text-muted">By {{ $post->user->name }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
