<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('emp_num');
            $table->string('emp_lastname');
            $table->string('emp_firstname');
            $table->string('emp_nickName');
            $table->string('emp_middlename')->nullable();
            $table->string('emp_department');
            $table->string('emp_password');
            $table->string('emp_image');
            $table->string('position')->default('Employee');
            $table->string('status')->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('employee_infos');
    }
}
