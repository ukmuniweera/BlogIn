@extends('layouts.dashlay')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" rows="6" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input id="image" type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update Post</button>
    </form>
@endsection
