@extends('layouts.index')

@section('content')
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded mb-3"
                    style="max-height:400px; width:100%; object-fit:cover;" alt="{{ $post->title }}">
            @endif

            <p class="card-text">{{ $post->content }}</p>
            <p class="text-muted small">By: {{ $post->user->name }} | {{ $post->created_at->format('d M Y') }}</p>
        </div>
    </div>
@endsection
