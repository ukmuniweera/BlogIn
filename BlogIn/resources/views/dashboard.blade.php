@extends('layouts.dashlay')

@section('content')
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    <hr>
    <h2>Add New Post</h2>
    <form method="POST" action="{{ route('post.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" rows="6" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input id="image" type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
@endsection
