<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facebook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('facebook', function (Blueprint $table) {
            $table->Increments('fbid');
            $table->integer('wifiid');
            $table->string('fbinfo1');
            $table->string('fbinfo2');
            $table->string('fbinfo3');
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

        Schema::dropIfExists('facebook');
    }
}
