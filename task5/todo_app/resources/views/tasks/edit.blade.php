@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="completed" class="form-check-input" id="completed"
                    {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Completed</label>
            </div>

            <button type="submit" class="btn btn-success">Update Task</button>
        </form>
    </div>
@endsection
