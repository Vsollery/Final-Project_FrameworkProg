@extends('layouts.main')

@section('container')

<section class="vh-90 rounded m-3" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src=" " class="rounded-circle img-fluid" style="width: 100px;" />
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
            </div>
        </div>
    </div>
</section>

@endsection