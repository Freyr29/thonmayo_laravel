<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('email')->unique();
            $table->string('password');
            $table->string('prenom');
            $table->string('nom');
            $table->string('phone');
            $table->string('address');
            $table->string('pays');
            $table->integer('isadmin')->default(0);
            $table->string('ville');
        });

        DB::statement('INSERT INTO users VALUES(1,"admin@thonmayo.fr","$2a$12$UeIFjH2w3zZJ6HJxx8Gawu7S7sD4v9juskpvMlsxIbbVQ29F814oW","admin","admin","+330000000000","3 rue des admins","France",1,"Paris")');
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
