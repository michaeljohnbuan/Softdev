<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgegroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agegroups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); 
            $table->string('user_name'); 
            $table->string('evac_name'); 
            $table->integer('toddler_kid'); 
            $table->integer('teen'); 
            $table->integer('older'); 
            $table->integer('seniorcitizen');
            $table->integer('total')->default(0);  
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
        Schema::dropIfExists('agegroups');
    }
}
