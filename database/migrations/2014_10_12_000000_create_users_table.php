<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('userid');
            $table->string('type')->default('user');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('company');
            $table->string('phone');
            $table->string('add1');
            $table->string('add2');
            $table->string('city');
            $table->string('prov');
            $table->string('postal');
            $table->string('country');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
