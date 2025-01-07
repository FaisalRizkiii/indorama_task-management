<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('dept_id')->references('dept_id')->on('departments');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('employee_id')->references('employee_id')->on('employees');
        });

        Schema::table('departments', function (Blueprint $table) {
            if (!Schema::hasColumn('departments', 'head_id')) {
                $table->string('head_id')->nullable(); // Add head_id if not added earlier
            }
            $table->foreign('head_id')->references('employee_id')->on('employees');
        });
    }

    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropForeign(['head_id']);
            if (Schema::hasColumn('departments', 'head_id')) {
                $table->dropColumn('head_id');
            }
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['employee_id']);
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['dept_id']);
        });
    }
};
