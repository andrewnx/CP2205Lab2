@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Category</div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}">
                @error('name')
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