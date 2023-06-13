@extends('tasks.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Task</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/mytasks/{{ $task->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('judul') is-invalid @enderror" id="title"
                    value="">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">Update Task</button>
        </form>

        <a href="/dashboard/mytasks" class="d-block mt-5 mb-3">
            <button type="button" class="btn btn-dark"> <span data-feather="arrow-left"
                    class="align-text-bottom"></span> Back</button>
        </a>
    </div>
@endsection