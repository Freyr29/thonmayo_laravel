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
            `image_url` varchar(255) NOT NULL,
            `prix` float NOT NULL
        )');
        DB::statement('INSERT INTO menus VALUES(1,"Menu du midi", 1, 1, 1,"image/", 13)');
        DB::statement('INSERT INTO menus VALUES(2,"Menu du plaisir", 2, 1, 2,"image/", 14)');
        DB::statement('INSERT INTO menus VALUES(3,"Menu rapide", 1, 3, 3,"image/", 12)');
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
