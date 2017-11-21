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
            $table->increments('id');
            $table->timestamps();
        });
        
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 100)->unique();
            $table->string('phone', 30)->unique();
            $table->string('country', 20)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('age', 20)->nullable();
            $table->string('chirch', 100);
            $table->dateTime('register_date');
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
        Schema::dropIfExists('visitors');
    }
}
