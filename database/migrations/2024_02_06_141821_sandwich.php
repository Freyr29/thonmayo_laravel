<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Sandwich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE IF NOT EXISTS sandwich (
            `id_sandwich` int(255) AUTO_INCREMENT PRIMARY KEY,
            `nom_sandwich` varchar(255) NOT NULL,
            `ingrédients` varchar(1000) NOT NULL,
            `prix` float NOT NULL
        )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS sandwich');
    }
}
