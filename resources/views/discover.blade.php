@extends('layouts.main')

@section('container')
    @forelse ($users as $user)
        <div class="card text-center my-3">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->name }} has {{ $user->tasks->count() }} Task</p>
                <a href="/discover/{{ $user->id }}" class="btn btn-success">Their Tasks</a>
            </div>
            <div class="card-footer text-muted">
               Joined: {{ $user->created_at->diffForHumans() }}
            </div>
        </div>
    @empty
        <p>No users found.</p>
    @endforelse

    {{ $users->links() }}
@endsection
