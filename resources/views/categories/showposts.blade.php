@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ $category->name }} Posts</div>

    <div class="card-body">
        <ul>
            @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="card-footer">
        <a href="{{ route('posts.create', ['category_id' => $category->id]) }}" class="btn btn-primary mb-2">Create
            Post</a>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection