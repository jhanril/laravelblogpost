@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This Project supports basic CRUD functionality.</p>
        <a href="#" class="btn btn-primary my-2" href="/login">Login</a>
        <a href="#" class="btn btn-success my-2" href="/register">Register</a>
        </p>
    </div>
        
@endsection
