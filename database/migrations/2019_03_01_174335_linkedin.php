<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Linkedin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('linkedin', function (Blueprint $table) {
            $table->Increments('linid');
            $table->integer('wifiid');
            $table->string('lininfo1');
            $table->string('lininfo2');
            $table->string('lininfo3');
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

        Schema::dropIfExists('linkedin');
    }
}
