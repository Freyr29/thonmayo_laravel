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
        DB::statement('DROP TABLE IF EXISTS boissons');
    }
}
