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
            $table->task_id()->primary();
            $table->string('description');
            $table->enum('priority_level', ['urgent', 'important', 'normal', 'low']);
            $table->enum('status', ['not_started', 'on_progress', 'need_review', 'completed']);
            $table->foreign('assign_to')->references('id_employee')->on('employee')->nullable();
            $table->boolean('need_review')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tasks');
    }
};
