@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 font-weight-normal text-center mb-3">Register</h1>
            <form action="/register" method="post" class="needs-validation" novalidate>
                @csrf

                @input('Name', 'name', 'text', 'rounded-top')
                @input('Email', 'email', 'email')
                @input('Password', 'password', 'password', 'rounded-bottom')

                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already have an account? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection

@php
function input($label, $name, $type, $class = '') {
    $error = $errors->has($name) ? ' is-invalid' : '';
    $message = $errors->has($name) ? $errors->first($name) : '';

    echo '<div class="form-floating">';
    echo '<label for="input' . ucfirst($name) . '" class="sr-only">' . $label . '</label>';
    echo '<input type="' . $type . '" id="input' . ucfirst($name) . '" name="' . $name . '" class="form-control ' . $class . $error . '" placeholder="' . $label . '" value="{{ old(\'' . $name . '\') }}" required>';
    echo $error ? '<div class="invalid-feedback">' . $message . '</div>' : '';
    echo '</div>';
}
@endphp
