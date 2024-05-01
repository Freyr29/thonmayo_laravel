<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sandwich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sandwich', function (Blueprint $table) {
            $table->increments('id_sandwich');
            $table->string('nom_sandwich');
            $table->string('ingredients');
            $table->string('image_url');
            $table->float('prix');
        });

        DB::statement('INSERT INTO sandwich VALUES(1, "Le London", "Pain complet, roast beef, cheddar affiné, roquette, chutney aux oignons rouges.", "image/london.png", 9)');
        DB::statement('INSERT INTO sandwich VALUES(2, "Le Santiago ", "Pain aux sésames, chorizo, tabasco, salade, rondelles de poivrons, jalapenos.", "image/santiago.png", 7)');
        DB::statement('INSERT INTO sandwich VALUES(3, "Le Dakar", "Pain complet, poulet frit, pastèque, sauce michigan.", "image/Le dakar.png", 8.5)');
        DB::statement('INSERT INTO sandwich VALUES(4, "Le Dubaï", "Pain pita artisanal légèrement grillé, lamelles de steak d\'agneau grillé, romarin, huile d\'olive, houmous riche et crémeux.", "image/le dubai.png", 6)');
        DB::statement('INSERT INTO sandwich VALUES(5, "Le Parisien", "Pain blanc, jambon en tranche, salade, tranches de tomates, beurre.", "image/parisien.png", 8)');
        DB::statement('INSERT INTO sandwich VALUES(6, "L\'Oslo", "Pain Suédois, saumon, crème fraîche, salade, tomates cerises.", "image/oslo.png", 10.37)');
        DB::statement('INSERT INTO sandwich VALUES(7, "Le Moscou", "Pain Suédois, saumon, Tilsit (fromage russe), Raifort, cornichons, caviar noir d\'esturgeon.", "image/le moscou.png", 73.46)');

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
