@extends('tasks.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Task Number: 1</h1>
    </div>

    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #4F709C !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #4F709C;">Task Details</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Created at</p>
                                    <p>{{ $task->created_at->diffForHumans() }}</p>
                                </div>
                                @if ($task->created_at != $task->updated_at)
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Edited</p>
                                        <p>{{ $task->updated_at->diffForHumans() }}</p>
                                    </div>
                                @endif

                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Title</p>
                                    <p>{{ $task->title }}</p>
                                </div>
                            </div>

                            <p class="lead fw-bold mb-4 pb-2" style="color: #4F709C;">Description</p>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                <p>{{ $task->description }}</p>
                            </div>

                            <p class="lead fw-bold my-2 pb-2" style="color: #4F709C;">Status</p>

                            <div class="row">
                                <div class="col-md">
                                    @if ($task->is_completed == 0)
                                        <h6><span class="badge bg-danger">Unfinished</span></h6>
                                    @else
                                        <h6><span class="badge bg-success">Finished</span></h6>
                                    @endif
                                </div>
                                <div class="col-md">
                                    @if ($task->is_completed == 0)
                                        <form action="/dashboard/mytasks/{{ $task->id }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            <button class="badge bg-success border-0"
                                                onclick="return confirm ('Finish this task?')"><span data-feather="check"
                                                    class="align-text-bottom"></span>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                            <p class="lead fw-bold my-2 pb-2" style="color: #4F709C;">Action</p>


                            <a href="/dashboard/mytasks/{{ $task->id }}/edit" class="badge bg-warning"> <span
                                    data-feather="edit" class="align-text-bottom"></span></a>
                            <form action="/dashboard/mytasks/{{ $task->id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure you want to delete this task?')">
                                    <span data-feather="trash" class="align-text-bottom"></span>
                                </button>
                            </form>

                            <a href="/dashboard/mytasks" class="d-block mt-5 mb-3">
                                <button type="button" class="btn btn-dark"> <span data-feather="arrow-left"
                                        class="align-text-bottom"></span> Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection