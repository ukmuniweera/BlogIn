@extends('layouts.index')

@section('content')
    @include('layouts.hero')
    <div class="row mb-2">
        @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            {{ $post->title }}
                        </h3>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="image">
                        <div class="mb-1 text-muted">{{ $post->created_at->format('d M Y') }}</div>
                        <p class="card-text mb-auto">{{ str()->limit($post->content, 250, ' ... ') }}</p>
                        <a href="{{ route('post.card', $post->id) }}">Continue reading</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
