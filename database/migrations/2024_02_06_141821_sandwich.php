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
        DB::statement('INSERT INTO sandwich VALUES(1, "Le London", "Préparé sur du pain complet avec du roast beef, du cheddar affiné, de la roquette, et un peu de chutney aux oignons rouges.", "https://cdn.discordapp.com/attachments/1077537469576269894/1210497489799745536/london.png?ex=65eac6a3&is=65d851a3&hm=6c9cdbc806f2b9891b89b422560c7f52785b65dd3cc7c6162ddae13547fae176&", 9)');
        DB::statement('INSERT INTO sandwich VALUES(2, "Le Santiago ", "Un pain aux sésames, chorizo, tabasco, salade, rondelles de poivrons, jalapenos", "https://cdn.discordapp.com/attachments/1077537469576269894/1210497489304555560/santiago.png?ex=65eac6a3&is=65d851a3&hm=a41f58e12079f410f074b6a278e0a6cd13d319bb52ac4eac7353b8e24b50a2d0&", 7)');
        DB::statement('INSERT INTO sandwich VALUES(3, "Le Dakar", "Un sandwich sur pain complet avec du poulet frit, et de la pastèque.", "https://cdn.discordapp.com/attachments/1077537469576269894/1209498922519896084/Le_dakar.png?ex=65e724a6&is=65d4afa6&hm=4c09bf905548ed90fac949e5f5e11b12035c5f133fced309322685e800bb65a8&", 8.5)');
        DB::statement('INSERT INTO sandwich VALUES(4, "Le Dubaï", "Pain pita artisanal légèrement grillé, des lamelles de steak d\'agneau grillé, mariné dans un mélange d\'ail, de romarin, et d\'huile d\'olive, ainsi que du houmous riche et crémeux étalé généreusement sur le pain pour une base onctueuse.", "https://cdn.discordapp.com/attachments/1077537469576269894/1209503032199610428/le_dubai.png?ex=65e7287a&is=65d4b37a&hm=40fe9a27ee08c155ca467cbf4fc44a7e3d471616470696c7e7b9bf1b22b5523f&", 6)');
        DB::statement('INSERT INTO sandwich VALUES(5, "Le Parisien", "Préparé avec du jambon de porc, de la salade, des tranches de tomates et du beurre.", "https://cdn.discordapp.com/attachments/1077537469576269894/1201890540568981674/parisien.png?ex=65e7264a&is=65d4b14a&hm=8eee392f1576e5435460c89eba502449a6cf3d1b15b5aa1d101c417b0803bea9&", 8)');
        DB::statement('INSERT INTO sandwich VALUES(6, "L\'Oslo", "Préparé sur du pain Suédois avec du saumon, de la crème fraîche, de la salade et des tomates cerises.", "https://cdn.discordapp.com/attachments/1077537469576269894/1201888260109123584/stocholome.png?ex=65e7242b&is=65d4af2b&hm=131918abc15bc1fd0222b4807c87da743d047b8af8c2b51315410254af9a5c33&", 10.37)');
        DB::statement('INSERT INTO sandwich VALUES(7, "Le Moscou", "Préparé sur du pain Suédois avec du saumon, du fromage russe le Tilsit, du Raifort, des cornichons, et surtout du caviar noir d\'esturgeon.", "https://cdn.discordapp.com/attachments/1077537469576269894/1209854735641747516/DALLE_2024-02-21_10.png?ex=65e87006&is=65d5fb06&hm=1a5129607154aad4bf9478db85680fc2c726b6c0d0960090d5f42a5e5b363734&", 73.46)');


        


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
