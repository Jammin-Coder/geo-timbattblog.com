<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContinentModel;

class HomeController extends Controller
{
    public static function home() {
        $continents = [];
        foreach (ContinentModel::CONTINENTS as $continent_name) {
            $continent = new ContinentModel;
            $continent->image_url = "/static/maps/$continent_name/$continent_name.png";
            $continent->name = $continent_name;
            
            array_push($continents, $continent);
        }
        return view('home', ['continents' => $continents]);
    }
}
