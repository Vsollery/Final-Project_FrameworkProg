@extends('tasks.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Tasks</h1>
    </div>

    <div class="table-responsive">
        <a href="/dashboard/mytasks/create" class="btn btn-primary mb-3">Add New Task</a>
        <table class="table table-striped table-sm">
            @unless ($tasks->isEmpty())
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Check</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                @if ($task->is_completed == 1)
                                    <span class="badge bg-success">Finished</span>
                                @else
                                    <span class="badge bg-danger">Unfinished</span>
                                @endif
                            </td>
                            <td>
                                @if ($task->is_completed == 0)
                                    <form action="/dashboard/mytasks/{{ $task->id }}" method="post" class="d-inline">
                                        @csrf
                                        <button class="badge bg-success border-0"
                                            onclick="return confirm ('Finish this task?')"><span data-feather="check"
                                                class="align-text-bottom"></span>
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                {{-- <a href="/" class="badge bg-success"><span data-feather="check"
                                    class="align-text-bottom"></span></i></a> --}}
                                <a href="/dashboard/mytasks/{{ $task->id }}" class="badge bg-primary"> <span
                                        data-feather="eye" class="align-text-bottom"></span></a>
                                <a href="/dashboard/mytasks/{{ $task->id }}/edit" class="badge bg-warning"> <span data-feather="edit"
                                        class="align-text-bottom"></span></a>
                                <form action="/dashboard/mytasks/{{ $task->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure you want to delete this task?')"><span
                                            data-feather="trash" class="align-text-bottom"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="alert alert-primary" role="alert">
                        You do not have any tasks
                    </div>
                @endunless
            </tbody>
        </table>
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endsection
