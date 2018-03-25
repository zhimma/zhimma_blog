<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('account')->nullable(false)->default("");
            $table->string('nickname')->nullable(false)->default("");
            $table->string('avatar')->nullable(false)->default("");
            $table->string('confirm_code',64)->nullable(false)->default("");
            $table->string('email')->unique()->nullable(false)->default("");
            $table->string('password')->nullable(false)->default("");
            $table->rememberToken()->nullable(false)->default("");
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
        Schema::dropIfExists('admins');
    }
}
