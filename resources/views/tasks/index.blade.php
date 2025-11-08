@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>My Tasks</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
</div>

@if($tasks->isEmpty())
    <div class="alert alert-info">No tasks yet. Create your first task.</div>
@else
<ul class="list-group">
    @foreach($tasks as $task)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <strong>{{ $task->title }}</strong><br>
            <small class="text-muted">{{ $task->description }}</small>
            @if($task->status)
                <span class="badge bg-success ms-2">Done</span>
            @else
                <span class="badge bg-warning ms-2">Pending</span>
            @endif
        </div>
        <div>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endif
@endsection
