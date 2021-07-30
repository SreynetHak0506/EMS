<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_code')->unique();
            $table->string('emp_name');
            $table->string('gender');
            $table->string('phone');
            $table->date('dob');
            $table->string('photo')->default('blank.jpg');
            $table->string('address');
            $table->string('marital_status');
            $table->double('basic_salary');
            $table->date('joining_date');
            $table->date('leaving_date')->nullable();
            $table->string('other')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
            ->references('id')
            ->on('departments')
            ->onDelete('cascade');
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')
            ->references('id')
            ->on('positions')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
