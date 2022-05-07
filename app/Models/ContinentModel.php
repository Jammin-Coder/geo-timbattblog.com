<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContinentModel extends Model
{
    use HasFactory;

    const CONTINENTS = ['north_america', 'south_america', 'africa', 'europe', 'asia', 'oceania'];
}
