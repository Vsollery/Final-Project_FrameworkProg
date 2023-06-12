@extends('layouts.main')

@section('container')
    {{-- {{ $user->tasks }} --}}
    @unless ($tasks->isEmpty())
    <h1 class="mb-5 text-center">{{ $user->name }}'s Tasks</h1>
        <div class="container">
            <div class="row">
                @foreach ($tasks as $task)
                <div class="col-md-4 mb-3">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $task->title }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-dark text-center" role="alert">
            {{ $user->name }} does not have any task
        </div>
    @endunless

@endsection