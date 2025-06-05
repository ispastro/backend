<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //  GET /api/tasks
    public function index()
    {
        return response()->json(Task::all());
    }

    //  POST /api/tasks
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Create task
        $task = Task::create([
            'title' => $validated['title'],
            'completed' => false,
        ]);

        return response()->json($task, 201); // 201 = Created
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
