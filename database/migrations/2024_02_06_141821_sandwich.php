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
        DB::statement('INSERT INTO sandwich VALUES(1, "Le London", "Préparé sur du pain complet avec du roast beef, du cheddar affiné, de la roquette, et un peu de chutney aux oignons rouges.", "https://media.discordapp.net/attachments/1077537469576269894/1201892401136803850/london.png", 9)');
        DB::statement('INSERT INTO sandwich VALUES(2, "Le Santiago ", "Un pain aux sésames, chorizo, tabasco, salade, rondelles de poivrons, jalapenos", "https://media.discordapp.net/attachments/1077537469576269894/1201886821768765440/santiago.png", 7)');
        DB::statement('INSERT INTO sandwich VALUES(3, "Le Dakar", "Un sandwich sur pain complet avec du poulet frit, et de la pastèque.", "https://cdn.discordapp.com/attachments/1077537469576269894/1209498922519896084/Le_dakar.png?ex=65e724a6&is=65d4afa6&hm=4c09bf905548ed90fac949e5f5e11b12035c5f133fced309322685e800bb65a8&", 6.5)');
        DB::statement('INSERT INTO sandwich VALUES(4, "Le Dubaï", "Pain pita artisanal légèrement grillé, des lamelles de steak d agneau grillé, mariné dans un mélange d ail, de romarin, et d huile d olive, ainsi que du houmous riche et crémeux étalé généreusement sur le pain pour une base onctueuse.", "https://cdn.discordapp.com/attachments/1077537469576269894/1209503032199610428/le_dubai.png?ex=65e7287a&is=65d4b37a&hm=40fe9a27ee08c155ca467cbf4fc44a7e3d471616470696c7e7b9bf1b22b5523f&", 6)');
        DB::statement('INSERT INTO sandwich VALUES(5, "Le Parisien", "Préparé avec du jambon de porc, de la salade, des tranches de tomates et du beurre.", "https://cdn.discordapp.com/attachments/1077537469576269894/1201890540568981674/parisien.png?ex=65e7264a&is=65d4b14a&hm=8eee392f1576e5435460c89eba502449a6cf3d1b15b5aa1d101c417b0803bea9&", 8)');
        DB::statement('INSERT INTO sandwich VALUES(6, "Le Norvegien", "Préparé sur du pain Suédois avec du saumon, de la crème fraîche, de la salade et des tomates cerises.", "https://cdn.discordapp.com/attachments/1077537469576269894/1201888260109123584/stocholome.png?ex=65e7242b&is=65d4af2b&hm=131918abc15bc1fd0222b4807c87da743d047b8af8c2b51315410254af9a5c33&", 10)');

        


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
