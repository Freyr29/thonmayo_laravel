<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Boissons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boissons', function (Blueprint $table) {
            $table->increments('id_boisson');
            $table->string('nom_boisson');
            $table->float('prix');
            $table->string('image_url');
            $table->string('type');
            $table->float('taille_cl');
        });

        DB::statement('INSERT INTO boissons VALUES(1, "Coca Cola", 1.58, "image/coca-cola-fr-slim-33.jpg", "Canette", 33)');
        DB::statement('INSERT INTO boissons VALUES(2, "Coca Cola Zéro", 1.94, "image/coca-cola-zero-33-cl.jpg", "Canette", 33)');
        DB::statement('INSERT INTO boissons VALUES(3, "Coca Cola Chery", 1.97, "image/coca-cola-chery-33cl.jpg", "Canette", 33)');
        DB::statement('INSERT INTO boissons VALUES(4, "Ice Tea", 1.76, "image/ice-tea-33cl.png", "Canette", 33)');
        DB::statement('INSERT INTO boissons VALUES(5, "Oasis", 1.76, "image/oasis-33cl.png", "Canette", 33)');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS boissons');
    }
}
