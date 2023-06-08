@extends('layouts.main')
@section('container')

<div class="card-body text-center bg-info rounded">
    <main role="main" class="inner cover">
        <h1 class="card-title text-white">Welcome to TO DO web application</h1>
    </main>

    <h5 class="text-white m-3">Group 1</h5>
    <p class="text-white m-3" >Member 1</p>
    <p class="text-white m-3">Member 2</p>
    <p class="text-white m-3">Member 3</p>
    <p class="text-white m-3">Member 4</p>

    <div>
        <a href="/login" class="btn btn-lg btn-secondary btn-inline mt-3">Login</a>
        <a href="/register" class="btn btn-lg btn-light btn-inline mt-3">Register</a>
    </div>    
</div>
    
@endsection