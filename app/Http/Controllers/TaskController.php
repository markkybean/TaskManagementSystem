<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use App\Models\TaskManagement; // Import the TaskManagement model

class TaskController extends Controller
{
    /**
     * Store a newly created task management data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'difficulty' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'task_assign' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Insert a new record into the taskmanagement table using Eloquent ORM
        $task = new TaskManagement();
        $task->name = $request->input('name');
        $task->department = $request->input('department');
        $task->difficulty = $request->input('difficulty');
        $task->priority = $request->input('priority');
        $task->task_assign = $request->input('task_assign');
        $task->status = $request->input('status');
        $task->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Task management data stored successfully.');
    }
}
