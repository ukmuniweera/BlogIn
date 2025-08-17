@extends('layouts.dashlay')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" type="button" class="btn btn-success">Edit</a>
                        <a href="{{ route('post.delete', $post->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
