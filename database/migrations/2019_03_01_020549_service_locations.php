<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('servlocation', function (Blueprint $table) {
            $table->Increments('servid');
            $table->integer('userid');
            $table->string('company');
            $table->string('contact');
            $table->string('email');
            $table->string('phone');
            $table->string('add1');
            $table->string('add2');
            $table->string('city');
            $table->string('prov');
            $table->string('postal');
            $table->string('country');
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
        Schema::dropIfExists('servlocation');

    }
}
