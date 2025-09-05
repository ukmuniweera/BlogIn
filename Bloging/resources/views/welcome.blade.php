@extends('layouts.index')

@section('content')
    @include('layouts.hero')
    <div class="row g-4">
        @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 150, '...') }}</p>
                        <p class="text-muted small">{{ $post->created_at->format('d M Y') }}</p>
                        <a href="{{ route('post.card', $post->id) }}" class="btn btn-outline-primary mt-auto">Continue
                            Reading</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
