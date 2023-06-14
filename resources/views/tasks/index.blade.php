@extends('tasks.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Your Tasks Status</h1>
    </div>

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-4 mb-3" style="width: 20rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Your Tasks</h5>
                        <p class="card-text font-weight-bold">You have {{ $tasks->count() }}</p>
                        <a href="/dashboard/mytasks/" class="badge bg-primary" style="text-decoration:none">View Task</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3" style="width: 20rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Your Finished Tasks</h5>
                        <p class="card-text">You have {{ $tasks_complete->count() }} Finished Tasks</p>
                        <a href="/dashboard/mytasks/finished" class="badge bg-primary" style="text-decoration:none">View Task</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3" style="width: 20rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Your Unfinished Tasks</h5>
                        <p class="card-text">You have {{ $tasks_incomplete->count() }} Unfinished Tasks</p>
                        <a href="/dashboard/mytasks/unfinished" class="badge bg-primary" style="text-decoration:none">View Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

