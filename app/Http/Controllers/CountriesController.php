<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContinentModel;

class CountriesController extends Controller
{
    public static function index($continent) {
        $countries = ContinentModel::getCountriesFromContinent($continent);

        return view('countries_index', ['continent' => $continent, 'countries' => $countries]);
    }

    public static function quiz($continent) {
        $quiz_country = ContinentModel::getRandomCountryFromContinent($continent);
        $answers = [$quiz_country['country']];

        
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $random_country = ContinentModel::getRandomCountryFromContinent($continent);
                if (in_array($random_country['country'], $answers)) {
                    $random_country = ContinentModel::getRandomCountryFromContinent($continent);
                } else {
                    array_push($answers, $random_country['country']);
                    break;
                }
            }

            if (count($answers) == 4) {
                break;
            }
        }

        if (count($answers) < 4) {
            redirect('/{{ $continent }}/quiz?error=could_not_fetch_answers');
            exit();
        }

        shuffle($answers);

        return view('quiz', [
            'continent' => $continent,
            'country' => $quiz_country['country'],
            'iso' => $quiz_country['iso'],
            'answers' => $answers
        ]);

    }
}
