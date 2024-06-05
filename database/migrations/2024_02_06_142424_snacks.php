<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Snacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snacks', function (Blueprint $table) {
            $table->increments('id_snack');
            $table->string('nom_snack');
            $table->string('ingredients');
            $table->string('image_url');
            $table->float('prix');
        });

        DB::statement('INSERT INTO snacks VALUES(1,"Frites maisons","Pommes de terre françaises, cuites à l\'huile d\'olive","image/frites-a-la-poele.jpeg", 3.43)');
        DB::statement('INSERT INTO snacks VALUES(2,"Patates sautées maisons","Pommes de terre françaises","image/potatoes.jpg", 4.23)');
        DB::statement('INSERT INTO snacks VALUES(3,"Salade maison","Salade à la tomate et à la salade","image/salade.png", 1.69)');
        DB::statement('INSERT INTO snacks VALUES(4,"Chips Lays","Chips de luxe" , "image/lays-chips.png", 0.50)');
        DB::statement('INSERT INTO snacks VALUES(5,"Sauce barbecue","Sauce barbecue maison", "image/sauce-bbc.jpeg", 1.12)');
        DB::statement('INSERT INTO snacks VALUES(6,"Sauce béarnaise","Sauce béarnaise maison", "image/sauce-bearnaise.jpg", 1.34)');
        DB::statement('INSERT INTO snacks VALUES(7,"Sauce samouraï","Sauce samouraï maison", "image/sauce-samourai.jpg", 1.46)');


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
