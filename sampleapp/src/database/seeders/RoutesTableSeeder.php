<?php

use Illuminate\Database\Seeder;
use App\Models\Route;

class RoutesTableSeeder extends Seeder {
    public function run() {
        Route::create([
            'start_point' => 'Station A',
            'end_point' => 'Station B',
            'stops' => json_encode(['Stop 1', 'Stop 2', 'Stop 3']),
        ]);

        Route::create([
            'start_point' => 'Station C',
            'end_point' => 'Station D',
            'stops' => json_encode(['Stop 4', 'Stop 5']),
        ]);
    }
}
?>
