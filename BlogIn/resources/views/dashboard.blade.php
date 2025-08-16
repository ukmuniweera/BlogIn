@extends('layouts.dashlay')

@section('content')
    <p>{{ Auth::user()->name }}</p>
    @if (session('session'))
        <div class="alert alert-success">
            {{ session('session') }}
        </div>
    @endif
@endsection
