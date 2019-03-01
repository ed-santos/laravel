<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Twitter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('twitter', function (Blueprint $table) {
            $table->Increments('twtid');
            $table->integer('wifiid');
            $table->string('twtinfo1');
            $table->string('twtinfo2');
            $table->string('twtinfo3');
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

        Schema::dropIfExists('twitter');
    }
}
