<?php

namespace Database\Seeders;

use App\Models\Dinner;
use Illuminate\Database\Seeder;

class DinnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dinner::create([
            'dinner_id' => '1',
            'dinner_number' => 'Dinner 1',
        ]);
        Dinner::create([
            'dinner_id' => '2',
            'dinner_number' => 'Dinner 2',
        ]);
        Dinner::create([
            'dinner_id' => '3',
            'dinner_number' => 'Dinner 3',
        ]);
        Dinner::create([
            'dinner_id' => '4',
            'dinner_number' => 'Dinner 4',
        ]);
    }
}
