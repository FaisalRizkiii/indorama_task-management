<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->string('task_id')->primary();
            $table->string('description');
            $table->enum('priority_level', ['high','normal', 'low']);
            $table->enum('status', ['not_started', 'on_progress', 'need_review', 'completed']);
            $table->string('assign_to');
            $table->foreign('assign_to')->references('employee_id')->on('employees')->nullable();
            $table->boolean('need_review')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
