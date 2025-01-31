<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration {
    public function up() {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Primary key (ticket_id)
            $table->unsignedBigInteger('user_id'); // ID pengguna yang memesan tiket
            $table->unsignedBigInteger('bus_id'); // ID bus yang terkait
            $table->unsignedBigInteger('route_id'); // ID rute yang terkait
            $table->unsignedBigInteger('payment_id'); // ID pembayaran yang terkait
            $table->string('status'); // Status tiket (e.g., "booked", "cancelled")
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('tickets');
    }
}
?>
