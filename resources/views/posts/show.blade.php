@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ $post->title }}</div>
    <div class="card-body">
        <p>{{ $post->body }}</p>
        <p>Category: {{ $post->category->name }}</p>
        <p>Created at: {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
        <p>Updated at: {{ $post->updated_at->format('Y-m-d H:i:s') }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection