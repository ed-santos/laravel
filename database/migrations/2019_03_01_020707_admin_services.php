<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('adminservice', function (Blueprint $table) {
            $table->Increments('adminservid');
            $table->integer('userid');
            $table->integer('servid');
            $table->string('notes');
            $table->dateTime('startdate');
            $table->dateTime('completedate');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
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

        Schema::dropIfExists('adminservice');
    }
}
