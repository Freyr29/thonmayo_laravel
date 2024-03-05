<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Boissons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE IF NOT EXISTS boissons (
            `id_boisson` int(255) AUTO_INCREMENT PRIMARY KEY,
            `nom_boisson` varchar(255) NOT NULL,
            `prix` float NOT NULL,
            `image_url` varchar(255) NOT NULL,
            `type` varchar(255) NOT NULL,
            `taille_cl` float NOT NULL
        )');
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
