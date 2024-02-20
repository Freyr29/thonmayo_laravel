<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Snacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE IF NOT EXISTS snacks (
            `id_snack` int(255) AUTO_INCREMENT PRIMARY KEY,
            `nom_snack` varchar(255) NOT NULL,
            `prix` float NOT NULL
        )');
        DB::statement('INSERT INTO snacks VALUES(1,"Frites maisons", 5)');
        DB::statement('INSERT INTO snacks VALUES(2,"Patates sautées maisons", 6)');
        DB::statement('INSERT INTO snacks VALUES(3,"Salade", 4)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS snacks');
    }
}
