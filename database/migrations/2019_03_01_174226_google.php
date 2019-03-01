<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Google extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('google', function (Blueprint $table) {
            $table->Increments('gooid');
            $table->integer('wifiid');
            $table->string('gooinfo1');
            $table->string('gooinfo2');
            $table->string('gooinfo3');
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

        Schema::dropIfExists('google');
    }
}
