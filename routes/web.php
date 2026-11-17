<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $tasks = Task::whereDate('task_date', today())->get();
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
    $tasks = Task::orderBy('task_date')->get();
    return view('tasks', compact('tasks'));
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers/store', [CustomerController::class, 'store']);

Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);

Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);