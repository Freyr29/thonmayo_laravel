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
            `ingredients` varchar(1000) NOT NULL,
            `image_url` varchar(1000) NOT NULL,
            `prix` float NOT NULL
        )');
        DB::statement('INSERT INTO sandwich VALUES(1, "Le London", "Préparé sur du pain complet avec du roast beef, du cheddar affiné, de la roquette, et un peu de chutney aux oignons rouges.", "https://media.discordapp.net/attachments/1077537469576269894/1201892401136803850/london.png", 7)');
        DB::statement('INSERT INTO sandwich VALUES(2, "Le Santiago ", "Un pain aux sésames, chorizo, tabasco, salade, rondelles de poivrons, jalapenos", "https://media.discordapp.net/attachments/1077537469576269894/1201886821768765440/santiago.png", 7)');
        DB::statement('INSERT INTO sandwich VALUES(3, "Le New York", "Un sandwich sur pain complet avec du roast beef, du cheddar affiné, de la roquette, et un peu de chutney aux oignons rouges.", "https://media.discordapp.net/attachments/1077537469576269894/1201892401136803850/london.png", 7)');
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
