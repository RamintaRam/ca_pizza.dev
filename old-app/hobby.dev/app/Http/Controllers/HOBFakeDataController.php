<?php

namespace App\Http\Controllers;

use App\models\HOBCities;
use Faker\Factory;
use Illuminate\Http\Request;

class HOBFakeDataController extends Controller
{
    public function generateCities(int $count)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            HOBCities::create([
                'name' => $faker->name,
            ]);
        }
    }

    public function generateHobbies(int $count)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            HOBCities::create([
                'name' => $faker->name,

                'description' => $faker->text,
            ]);
        }
    }
}
