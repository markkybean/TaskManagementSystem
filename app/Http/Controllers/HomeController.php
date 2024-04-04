<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManagement; // Import the UserManagement model
use App\Models\TaskManagement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Retrieve all records from the user_management table
        $users = UserManagement::all();

        // Pass the retrieved data to the home.blade.php view
        return view('home', ['users' => $users]);
    }

    /**
     * Show the task management page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function taskManagement()
{
    // Retrieve all records from the taskmanagement table
    $tasks = TaskManagement::all();

    // Pass the retrieved data to the taskManagement.blade.php view
    return view('taskManagement', ['tasks' => $tasks]);
}

}
