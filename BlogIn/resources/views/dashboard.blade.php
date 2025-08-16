@extends('layouts.dashlay')

@section('content')
    <p>Welcome! {{ Auth::user()->name }}</p>
    @if (session('session'))
        <div class="alert alert-success">
            {{ session('session') }}
        </div>
    @endif
    <h1>Add New Post</h1>
    <form method="POST" action="{{ route('post.create') }}">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
