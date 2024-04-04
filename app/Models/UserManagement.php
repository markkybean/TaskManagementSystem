<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    use HasFactory;

    protected $table = 'user_management'; // Assuming your table name is 'user_management'

    protected $fillable = [
        'name',
        'department',
        'roles',
        'monitoring',
        'logrecords'
    ];

    // Define any relationships here if applicable
}
