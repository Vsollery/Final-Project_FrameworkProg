@extends('tasks.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Users</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount of Tasks</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Joined</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->tasks->count() }}</td>
                        @if ($user->is_admin == 0)
                            <td> <span class="badge bg-info">Normal User</span></td>
                        @else
                            <td> <span class="badge bg-success">Admin</span></td>
                        @endif
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <form action="/manage-users/{{ $user->id }}" method="post" class="d-inline">
                                @csrf
                                @if ($user->is_admin == 0)
                                    <button class="badge bg-info border-0"
                                        onclick="return confirm ('Change Role of User?')"><span data-feather="edit-2"
                                            class="align-text-bottom"></span>
                                    </button>
                                @else
                                    <button class="badge bg-success border-0"
                                        onclick="return confirm ('Change Role of User?')"><span data-feather="edit-2"
                                            class="align-text-bottom"></span>
                                    </button>
                                @endif
                            </form>
                            <form action="/manage-users/{{ $user->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    <span data-feather="trash" class="align-text-bottom"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endsection