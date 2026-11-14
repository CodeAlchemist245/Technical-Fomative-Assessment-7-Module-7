<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    $tasks = Task::whereDate('task_date', today())->get();
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
    $tasks = Task::orderBy('task_date')->get();
    return view('tasks', compact('tasks'));
});