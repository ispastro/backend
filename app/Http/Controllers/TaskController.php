<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //  GET /api/tasks
    public function index(Request $request)
    {
        $status = $request->query('status', 'all'); // Get status from query parameter, default to 'all'

        if ($status === 'completed') {
            $tasks = Task::where('completed', true)->get();
        } elseif ($status === 'pending') {
            $tasks = Task::where('completed', false)->get();
        } else {
            $tasks = Task::all();
        }

        return response()->json($tasks);
    }

    //  POST /api/tasks
    public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000', // Add this if description is optional
    ], 
    [
        'title.required' => 'The title field is required.',
        'title.string' => 'The title must be a string.',
        'title.max' => 'The title may not be greater than 255 characters.',
        'description.string' => 'The description must be a string.',
        'description.max' => 'The description may not be greater than 1000 characters.',
    ]

);

    // Create task
    $task = Task::create([
        'title' => $validated['title'],
        'description' => $validated['description'] ?? null,
        'completed' => false,
    ]);

    // API Response
    return response()->json([
        'status' => 'success',
        'data' => $task,
    ], 201); // 201 = Created
}


    // PUT /api/tasks/{id}
    public function update($id)
    {
        $task = Task::findOrFail($id);
        $task->update(['completed' => true]);

        return response()->json($task);
    }

    //  DELETE /api/tasks/{id}
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
