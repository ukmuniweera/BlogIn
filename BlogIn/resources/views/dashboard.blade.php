@extends('layouts.dashlay')

@section('content')
    <p>{{ Auth::user()->name }}</p>
@endsection
