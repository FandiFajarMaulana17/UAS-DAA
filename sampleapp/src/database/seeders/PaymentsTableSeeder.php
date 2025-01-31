<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentsTableSeeder extends Seeder {
    public function run() {
        Payment::create([
            'user_id' => 1,
            'amount' => 100.00,
            'status' => 'completed',
            'payment_method' => 'credit card',
        ]);

        Payment::create([
            'user_id' => 2,
            'amount' => 150.00,
            'status' => 'pending',
            'payment_method' => 'paypal',
        ]);
    }
}
?>
