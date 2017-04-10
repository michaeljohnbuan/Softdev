<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtensilRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utensil_requests', function (Blueprint $table){

                $table->increments('id');
                $table->integer('user_id');
                $table->string('user_name');
                $table->string('utensilsfor');
                $table->integer('population');
                $table->date('date');
                $table->string('evac_name');
                $table->float('latitude', 10,6);
                $table->float('longtitude', 10,6);
                $table->string('address');
                $table->string('status');
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
        Schema::drop('utensil_requests');
    }
}
