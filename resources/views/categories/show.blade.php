@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ $category->name }}</div>

    <div class="card-body">
        <a href="{{ route('categories.showposts', $category->id) }}" class="btn btn-primary">View Posts</a>
    </div>

    <div class="card-footer">
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection