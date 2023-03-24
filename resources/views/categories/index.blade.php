@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($categories as $category)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{ $category->name }}</div>

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