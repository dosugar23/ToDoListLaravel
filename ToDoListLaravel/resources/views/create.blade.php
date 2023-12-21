@extends('layouts.app')

@section('content')
<div>
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <!-- Form fields here -->
        <button type="submit">Add Task</button>
    </form>
</div>
@endsection