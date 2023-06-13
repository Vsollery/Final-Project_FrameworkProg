@extends('layouts.main')

@section('container')

<section class="vh-90 rounded m-3" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">
                @auth
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                            <div class="mt-3 mb-4">
                                <img src="/images/logo.png" class="rounded-circle img-fluid" style="width: 100px;" />
                            </div>
                            <h4 class="mb-2">{{ $user->name }}</h4>
                            <p class="text-muted mb-4">Email <span class="mx-2">|</span> <a href="#!">{{ $user->email }}</a></p>
                            <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                <div>
                                    <p class="mb-2 h5">Joined</p>
                                    <p class="text-muted mb-0">{{ $user->created_at->diffForHumans() }}</p>
                                </div>
                                <div>
                                    <p class="mb-2 h5">Number of Tasks</p>
                                    <p class="text-muted mb-0">{{ $user->tasks->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="/images/logo.png" class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">TO DO</h4>
                        <p class="text-muted mb-4">Get Started!</p>
                        <div class="d-flex justify-content-center text-center mt-5 mb-2">
                            <div class="m-3">                                
                                <a href="/login" class="btn btn-lg btn-secondary btn-inline    mt-3">Login</a>
                            </div>
                            <div class="m-3">
                                <a href="/register" class="btn btn-lg btn-light btn-inline mt-3">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</section>

@endsection