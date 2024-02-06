<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE IF NOT EXISTS users (
            `id_user` int(255) AUTO_INCREMENT PRIMARY KEY,
            `nom_user` varchar(255) NOT NULL,
            `prenom_user` varchar(255) NOT NULL,
            `identifiant_user` varchar(255) NOT NULL,
            `mail_user` varchar(255) NOT NULL,
            `role_user` int(11) NOT NULL
        )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS users');
    }
}
