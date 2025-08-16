@extends('layouts.dashlay')

@section('content')
    <h1>Update Account</h1>
    <form method="POST" action="{{ route('user.register') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
