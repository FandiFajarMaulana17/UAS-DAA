<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration {
    public function up() {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Primary key (payment_id)
            $table->unsignedBigInteger('user_id'); // ID pengguna yang melakukan pembayaran
            $table->decimal('amount', 10, 2); // Jumlah pembayaran
            $table->string('status'); // Status pembayaran (e.g., "pending", "completed")
            $table->string('payment_method'); // Metode pembayaran (e.g., "credit card", "paypal")
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('payments');
    }
}
?>
