<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
        
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->timestamps();
            $table->unique('login', 'password');
        });
        
        $oCheck = DB::table('admins')->select('id')->where(['login', '=', 'admin'], ['email', '=', 'koval.xxj@gmail.com'])->first();
        if (!count($oCheck)) {
          DB::table('admins')->insert(
            [
              'login' => 'admin',
              'email' => 'koval.xxj@gmail.com',
              'password' => md5('calladmin'),
            ]
          );
        }
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
        Schema::dropIfExists('admins');
    }
}
