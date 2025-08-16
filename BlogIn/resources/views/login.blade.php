@extends('layouts.index')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="{{ route('user.login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
