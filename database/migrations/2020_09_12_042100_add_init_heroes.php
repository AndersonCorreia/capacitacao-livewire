<?php

use App\Models\Hero;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInitHeroes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        (new Hero(['name' => "T'Challa", 'knowAs' => 'Pantera Negra', 'interpreted' => 'Chadwick Boseman', 'created' => 1966]))->save();
        (new Hero(['name' => "Natasha Romanoff", 'knowAs' => 'Viúva Negra', 'interpreted' => 'Scarlett Johansson', 'created' => 1964]))->save();
        (new Hero(['name' => 'Merlin', 'knowAs' => "Boar's Sin of Gluttony", 'interpreted' => 'Maaya Sakamoto', 'created' => 2012]))->save();
        (new Hero(['name' => 'Cloud Strife', 'knowAs' => "Ex-Soldier", 'interpreted' => 'Takahiro Sakurai', 'created' => 1997]))->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
