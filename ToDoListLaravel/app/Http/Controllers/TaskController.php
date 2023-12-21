<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'category_id' => 'required|exists:categories,id',
        // Other fields...
    ]);

    Task::create($validatedData);
    return redirect()->route('tasks.index');
}
}
