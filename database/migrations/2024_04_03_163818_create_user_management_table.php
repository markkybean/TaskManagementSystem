<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserManagementTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user_management', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->string('roles')->nullable();
            $table->string('monitoring')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_management', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('department');
            $table->dropColumn('roles');
            $table->dropColumn('monitoring');
        });
    }
}
