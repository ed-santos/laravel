<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MailingAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('mailing_add', function (Blueprint $table) {
            $table->Increments('mailid');
            $table->integer('userid');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('company');
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

        Schema::dropIfExists('mailing_add');
    }
}
