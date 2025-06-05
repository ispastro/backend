<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::post('/tasks', [TaskController::class, 'store']); // Create a new task
Route::get('/tasks', [TaskController::class, 'index']); // Get all tasks
Route::put('/tasks/{id}', [TaskController::class, 'update']); // Update a task (mark as completed)
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // Delete a task

// Optional test route
Route::get('/test', function() {
    return response()->json(['message' => 'API is working!']);
});