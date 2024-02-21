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
            `ingredients` varchar(1000) NOT NULL,
            `image_url` varchar(1000) NOT NULL,
            `prix` float NOT NULL
        )');
        DB::statement('INSERT INTO snacks VALUES(1,"Frites maisons","pomme de terre françaises","https://img.cuisineaz.com/660x660/2016/07/26/i32581-frites-a-la-poele.jpeg", 3.43)');
        DB::statement('INSERT INTO snacks VALUES(2,"Patates sautées maisons","pomme de terre françaises","https://static.750g.com/images/1200-675/aeb1c574fad00aec34a19a476eaf68fa/la-cuisson.jpg", 4.23)');
        DB::statement('INSERT INTO snacks VALUES(3,"Salade maison","Salade à la tomate et à la salade","https://media.soscuisine.com/images/recettes/large/331.jpg", 1.69)');
        DB::statement('INSERT INTO snacks VALUES(4,"Chips Lays","Chips de luxe" , "https://www.lays.fr/images/default-source/products/packshots/lays-natural.png?sfvrsn=2", 0.50)');
        DB::statement('INSERT INTO snacks VALUES(5,"Sauce barbecue","Sauce barbecue maison", "https://static.750g.com/images/1200-630/bd34ac3c244d9779d4b25fd804e4d306/adobestock-271099773.jpeg", 1.12)');
        DB::statement('INSERT INTO snacks VALUES(6,"Sauce béarnaise","Sauce béarnaise maison", "https://www.soreal.fr/images/medias/recettes_sauce-cuisinee-bearnaise-384x3404x.jpg", 1.34)');
        DB::statement('INSERT INTO snacks VALUES(7,"Sauce samouraï","Sauce samouraï maison", "https://www.soreal.fr/images/medias/recettes_sauce-samourai-384x3404x.jpg", 1.46)');


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
