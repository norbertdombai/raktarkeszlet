<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raktar extends Model
{

    use HasFactory;
    //adatbázis tábla neév változtatása után kell beírni
    public $table = "raktarkeszlet";
}
