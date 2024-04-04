<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTaskmanagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taskmanagement', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('priority')->nullable();
            $table->string('task_assign')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taskmanagement', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('department');
            $table->dropColumn('difficulty');
            $table->dropColumn('priority');
            $table->dropColumn('task_assign');
            $table->dropColumn('status');
        });
    }
}
