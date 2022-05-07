<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContinentModel extends Model
{
    use HasFactory;
    public $table = 'continents';

    const CONTINENTS = ['north_america', 'south_america', 'africa', 'europe', 'asia', 'oceania'];

    public static function getCountriesFromContinent($continent_name) {
        $countries_json = DB::selectone(
            'SELECT json_countries FROM continents WHERE continent_name=:continent_name',
            [
                'continent_name' => $continent_name
            ]
        );

        $parsed_countries = [];

        foreach ($countries_json as $country) {
            $country_arr = json_decode($country, true)['countries'];
            foreach ($country_arr as $country) {
                array_push($parsed_countries, $country);
            }
        }
        
        return $parsed_countries;
    }

    public static function getRandomCountryFromContinent($continent) {
        $countries = self::getCountriesFromContinent($continent);
        $rand_index = rand(0, count($countries) -1);
        $selected_country = $countries[$rand_index];
        return $selected_country;
    }
}
