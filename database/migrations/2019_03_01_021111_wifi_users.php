<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WifiUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('wifiusers', function (Blueprint $table) {
            $table->Increments('wifiid');
            $table->string('userid');
            $table->string('locationid');
            $table->string('provider');
            $table->string('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('data1');
            $table->string('data2');
            $table->string('data3');
            $table->rememberToken();
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

        Schema::dropIfExists('wifiusers');
    }
}
