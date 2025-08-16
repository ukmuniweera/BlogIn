@extends('layouts.dashlay')

@section('content')
    <h1>Update Account</h1>
    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
