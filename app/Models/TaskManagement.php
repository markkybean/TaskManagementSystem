<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskManagement extends Model
{
    protected $table = 'taskmanagement';

    protected $fillable = [
        'name',
        'department',
        'difficulty',
        'priority',
        'task_assign',
        'status',
    ];

    // Define any relationships here if applicable
}
