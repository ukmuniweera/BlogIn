@extends('layouts.dashlay')

@section('content')
    <h1>Update Account</h1>
    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Account</button>
    </form>
@endsection
