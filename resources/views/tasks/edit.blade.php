@extends('layouts.app')

@section('content')
<h3>Edit Task</h3>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="status" class="form-check-input" id="status" {{ $task->status ? 'checked' : '' }}>
        <label class="form-check-label" for="status">Mark as done</label>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
