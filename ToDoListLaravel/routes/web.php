<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

// Display all tasks
Route::get('/tasks', [TaskController::class, 'index']);

// Display the form to create a new task
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');


// Store a new task
Route::post('/tasks', [TaskController::class, 'store']);

// ... more routes for tasks (edit, update, delete)

// ... more routes for tasks (edit, update, delete)

