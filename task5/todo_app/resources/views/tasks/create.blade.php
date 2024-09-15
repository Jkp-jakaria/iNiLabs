@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <button type="submit" class="btn btn-success">Create Task</button>
        </form>
    </div>
@endsection
