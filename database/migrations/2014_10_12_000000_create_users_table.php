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
            $table->increments('user_id');
            $table->string('username', 20)->unique();
            $table->string('name', 50);
            $table->string('password',255);
            $table->date('birthday')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('phone', 11);
            $table->string('email',255)->unique();
            $table->string('address', 255);
            $table->string('avatar',255)->nullable();
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
