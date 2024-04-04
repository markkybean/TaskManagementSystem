<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskManagement;

class TaskManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all tasks from the taskmanagement table
        $tasks = TaskManagement::all();
    
        // Dump the tasks to check if data is fetched
        // dd($tasks->toArray());
    
        // Pass the tasks data to the view
        return view('taskManagement', ['tasks' => $tasks]);
    }
    
}
