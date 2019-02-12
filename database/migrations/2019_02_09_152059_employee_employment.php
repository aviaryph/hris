<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeEmployment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employee_employment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->string('biometric_id', '90')->nullable();
            $table->date('date_hired')->nullable();
            $table->date('date_resign')->nullable();
            $table->date('contract_start')->nullable();
            $table->date('contract_end')->nullable();
            $table->string('branch')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('employee_type')->nullable();
            $table->string('schedule_type')->nullable();
            $table->string('position')->nullable();
            $table->string('created_by')->nullable();
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
        //
    }
}
