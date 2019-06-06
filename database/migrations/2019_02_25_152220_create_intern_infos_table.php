<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateInternInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        

        Schema::create('intern_infos', function (Blueprint $table) {
            $table->increments('intern_id');
            $table->string('intern_num');
            $table->string('intern_lastname');
            $table->string('intern_firstname');
            $table->string('intern_nickname');
            $table->string('intern_middlename')->nullable();
            $table->string('intern_department');
            $table->string('intern_password');
            $table->string('intern_image');
            $table->string('position')->default('intern');
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
        Schema::dropIfExists('intern_infos');
    }
}
