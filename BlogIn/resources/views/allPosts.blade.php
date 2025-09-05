@extends('layouts.dashlay')

@section('content')
    <h1>All Posts</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50, '...') }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ route('post.delete', $post->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
