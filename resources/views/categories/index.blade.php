@extends('layouts.app')

@section('content')
<div class="mb-2">
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
</div>
<div class="row">
    @foreach($categories as $category)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{ $category->name }}</div>

            <div class="card-body">
                <a href="{{ route('categories.show', $category->id )}}" class="btn btn-primary">View
                    Category</a>
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
    </div>
    @endforeach
</div>
@endsection