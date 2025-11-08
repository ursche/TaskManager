@extends('layouts.app')

@section('content')
<h3>Create Task</h3>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="status" class="form-check-input" id="status">
        <label class="form-check-label" for="status">Mark as done</label>
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection
