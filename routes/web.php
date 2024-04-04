<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskManagementController;





// Route for the landing page
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('landing');
    }
});

// Route for the home page, accessible only to authenticated users
Route::middleware('auth')->get('/home', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/taskManagement', [App\Http\Controllers\HomeController::class, 'taskManagement'])->name('taskManagement');

Route::get('/user_management', [UserManagementController::class, 'index'])->name('user_management.index');

Route::get('/task-management', [TaskManagementController::class, 'index']);

Route::get('/taskManagement', [TaskManagementController::class, 'index'])->name('taskManagement');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
