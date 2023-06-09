@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 font-weight-normal text-center mb-3">Register</h1>
            <form action="/register" method="post" class="needs-validation" novalidate>
                @csrf

                <div class="form-floating">
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror"placeholder="Email" value="{{ old('name') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already have an account? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection