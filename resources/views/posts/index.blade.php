@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if(auth()->check() && auth()->user()->can('create posts'))
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    @endif
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <p class="text-muted">By {{ $post->user->name }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                        @if(auth()->check() && auth()->user()->can('edit posts'))
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                        @endif
                        @if(auth()->check() && auth()->user()->can('delete posts'))
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
