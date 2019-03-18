@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, omnis?</p>
        <p><a href="/login" class="btn btn-success btn-lg">Login</a> <a href="/register" class="btn btn-primary btn-lg">Register</a></p>
    </div>
@endsection