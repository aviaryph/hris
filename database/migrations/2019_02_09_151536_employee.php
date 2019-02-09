<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id', '90');
            $table->string('employee_no', '90')->unique();
            $table->string('profile')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('mi')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->enum('gender', array("Male", "Female"))->nullable();
            $table->string('civil_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->date('birthday')->nullable();
            $table->text('age')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('current_address')->nullable();
            $table->string('current_city')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('email', '90')->unique()->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('pagibig_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('status')->nullable();
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
        //

        Schema::dropIfExists('employee');
    }
}
