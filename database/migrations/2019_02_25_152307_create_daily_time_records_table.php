<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyTimeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_time_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Date')->default();
            $table->string('fullname');
            $table->string('employee_number')->default('0');
            $table->string('position')->default('0');
            $table->string('am_in')->default('0');
            $table->string('am_late')->default('0');
            $table->string('pm_late')->default('0');
            $table->string('halfday')->default('0');
            $table->string('ot_in')->default('0');
            $table->string('ot_out')->default('0');
            $table->string('undertime')->default('0');
            $table->string('late')->default('0');
            $table->string('logout')->default('0');
            $table->string('total')->default('0');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('daily_time_records');
    }
}
