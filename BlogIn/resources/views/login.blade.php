@extends('layouts.index')

@section('content')
<h1>Login</h1>
<form>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection