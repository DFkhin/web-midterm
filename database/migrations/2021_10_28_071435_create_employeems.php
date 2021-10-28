<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeems', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('lastname', 60);
            $table->string('firstname', 60);
            $table->string('middlename', 60);
            $table->string('address', 120);
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();;
            $table->char('zip', 10);
            $table->integer('age')->unsigned();
            $table->date('birthdate');
            $table->date('date_hired');
            $table->integer('department_id')->unsigned();
            $table->integer('division_id')->unsigned();
           
            // $table->integer('company_id')->unsigned();

          


            $table->string('picture', 60);
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
        Schema::dropIfExists('employeems');
    }
}
