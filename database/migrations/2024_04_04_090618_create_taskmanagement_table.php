<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskmanagementTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('taskmanagement', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->enum('difficulty', ['Low', 'Medium', 'High']);
            $table->enum('priority', ['Low', 'Medium', 'High']);
            $table->string('task_assign');
            $table->enum('status', ['Pending', 'InProgress', 'Completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskmanagement');
    }
}
