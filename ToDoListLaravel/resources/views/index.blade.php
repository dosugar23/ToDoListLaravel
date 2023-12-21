@extends('layouts.app')

@section('content')
<div>
    <h1>Tasks</h1>
    @foreach ($tasks as $task)
        <div>
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
            <!-- Add more task details here -->
        </div>
    @endforeach
</div>
@endsection