<?php

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class SchedulesTableSeeder extends Seeder {
    public function run() {
        Schedule::create([
            'bus_id' => 1,
            'departure_time' => '08:00:00',
            'arrival_time' => '10:00:00',
        ]);

        Schedule::create([
            'bus_id' => 2,
            'departure_time' => '12:00:00',
            'arrival_time' => '14:00:00',
        ]);
    }
}
?>
