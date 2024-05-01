<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('nom_menu');
            $table->integer('id_sandwich')->unsigned();
            $table->foreign('id_sandwich')->references('id_sandwich')->on('sandwich')->onDelete('cascade');
            $table->integer('id_boisson')->unsigned();
            $table->foreign('id_boisson')->references('id_boisson')->on('boissons')->onDelete('cascade');
            $table->integer('id_snack')->unsigned();
            $table->foreign('id_snack')->references('id_snack')->on('snacks')->onDelete('cascade');
            $table->string('image_url');
            $table->float('prix');
        });

        DB::statement('INSERT INTO menus VALUES(1,"Menu du midi", 1, 1, 1,"image/", 13)');
        DB::statement('INSERT INTO menus VALUES(2,"Menu du plaisir", 2, 1, 2,"image/", 14)');
        DB::statement('INSERT INTO menus VALUES(3,"Menu rapide", 1, 3, 3,"image/", 12)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS menus');
    }
}
