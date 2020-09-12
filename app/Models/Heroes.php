<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Heroes extends Model
{
    use HasFactory;
    use Sushi;

    protected $rows = [
        ['name' => "T'Challa", 'knownAs' => 'Pantera Negra', 'interpreted' => 'Chadwick Boseman', 'created' => 1966],
        ['name' => "Natasha Romanoff", 'knownAs' => 'Viúva Negra', 'interpreted' => 'Scarlett Johansson', 'created' => 1964],
        ['name' => 'Merlin', 'KnowAs' => "Boar's Sin of Gluttony", 'interpreted' => 'Maaya Sakamoto', 'created' => 2012],
        ['name' => 'Cloud Strife', 'KnowAs' => "Ex-Soldier", 'interpreted' => 'Takahiro Sakurai', 'created' => 1997],
    ];
}
