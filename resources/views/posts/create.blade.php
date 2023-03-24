@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Post</div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body"
                    class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id"
                    class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{
                        $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection