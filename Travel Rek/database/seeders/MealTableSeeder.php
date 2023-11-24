<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::create([
            'meals_id' => '1',
            'meals_number' => 'Lunch 1',
        ]);
        Meal::create([
            'meals_id' => '2',
            'meals_number' => 'Lunch 2',
        ]);
        Meal::create([
            'meals_id' => '3',
            'meals_number' => 'Lunch 3',
        ]);
        Meal::create([
            'meals_id' => '4',
            'meals_number' => 'Lunch 4',
        ]);
    }
}
