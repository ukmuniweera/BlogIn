@extends('layouts.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            <figure>
                <blockquote class="blockquote">
                    <p>{{ $post->content }}</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <h6>By: {{ $post->User->name }} | {{ $post->created_at->format('d M Y') }}</h6>
                </figcaption>
            </figure>
        </div>
    </div>
@endsection
