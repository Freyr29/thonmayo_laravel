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
        DB::statement('INSERT INTO snacks VALUES(1,"Frites maisons","pomme de terre françaises","", 3.43)');
        DB::statement('INSERT INTO snacks VALUES(2,"Patates sautées maisons","pomme de terre françaises","https://static.750g.com/images/1200-675/aeb1c574fad00aec34a19a476eaf68fa/la-cuisson.jpg", 4.23)');
        DB::statement('INSERT INTO snacks VALUES(3,"Salade maison","Salade à la salade de salade","https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lesfruitsetlegumesfrais.com%2Fen-cuisine%2Frecettes%2Fsalade-verte-declinaisons-de-vinaigrettes&psig=AOvVaw2Pjr2rfR25Xs_DxLqpKALv&ust=1708611886873000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOi-_rbRvIQDFQAAAAAdAAAAABAE", 1.69)');
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
