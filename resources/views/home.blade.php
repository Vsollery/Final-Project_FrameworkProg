@extends('layouts.main')
@section('container')
    <div class="card-body text-center bg-dark rounded mb-3">
        <main role="main" class="inner cover">
            <h1 class="card-title font-weight-bold text-white">Welcome to Whatodo web application</h1>
        </main>

        <h5 class="text-white m-3">Group 1</h5>
        <p class="text-white m-3">Muhammad Fatih Akbar - 5025201117</p>
        <p class="text-white m-3">Venia Sollery Aliyya Hasna - 5025201161</p>
        <p class="text-white m-3"> Erlangga Wahyu Utomo - 5025201118</p>
        <p class="text-white m-3">Rangga Aulia Pradana - 5025201154</p>
        <p class="text-white m-3"> Teuku Auli Azhar - 5025201142</p>
        @guest
            <div>
                <a href="/login" class="btn btn-lg btn-secondary btn-inline mt-3">Login</a>
                <a href="/register" class="btn btn-lg btn-light btn-inline mt-3">Register</a>
            </div>
        @endguest

    </div>

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success text-center"
            role="alert">
            {{ session('message') }}
        </div>
    @endif
@endsection
