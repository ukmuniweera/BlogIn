@extends('layouts.dashlay')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('post.update', $post->id) }}">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
