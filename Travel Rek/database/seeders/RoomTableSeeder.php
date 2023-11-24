<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room_id' => '1',
            'room_number' => 'Room 1',
        ]);
        Room::create([
            'room_id' => '2',
            'room_number' => 'Room 2',
        ]);
        Room::create([
            'room_id' => '3',
            'room_number' => 'Room 3',
        ]);
        Room::create([
            'room_id' => '4',
            'room_number' => 'Room 4',
        ]);
    }
}
