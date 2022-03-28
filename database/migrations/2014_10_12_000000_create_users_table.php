<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable()->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->enum('role', ['superadmin', 'admin', 'employee']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('designation')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('joining_date')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->default('N');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
