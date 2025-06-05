<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // Method to create the 'tasks' table
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                         // Auto-incrementing ID
            $table->string('title');              // Task title
            $table->boolean('completed')->default(false); // Task status
            $table->timestamps();                 // created_at and updated_at
        });
    }

    // Method to rollback (drop) the table
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
