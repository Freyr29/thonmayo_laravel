<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE IF NOT EXISTS menus (
            `id_menu` int(255) AUTO_INCREMENT PRIMARY KEY,
            `nom_menu` varchar(255) NOT NULL,
            `id_sandwich` int(255) NOT NULL,
            `id_boisson` int(255) NOT NULL,
            `id_snack` int(255) DEFAULT NULL,
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
        DB::statement('DROP TABLE IF EXISTS menus');
    }
}
