@extends('layouts.app')

@section('content')
<div class="mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
</div>
<div class="row">
    @foreach($posts as $post)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                <p>{{ $post->body }}</p>
                <p>Category: {{ $post->category->name }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection