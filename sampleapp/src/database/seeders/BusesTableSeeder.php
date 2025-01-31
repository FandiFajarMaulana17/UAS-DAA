<?php

use Illuminate\Database\Seeder;
use App\Models\Bus;

class BusesTableSeeder extends Seeder {
    public function run() {
        Bus::create([
            'number' => 'B123',
            'capacity' => 50,
            'status' => 'in service',
        ]);

        Bus::create([
            'number' => 'B456',
            'capacity' => 40,
            'status' => 'in service',
        ]);

        Bus::create([
            'number' => 'B789',
            'capacity' => 60,
            'status' => 'out of service',
        ]);
    }
}
?>
