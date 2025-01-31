<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration {
    public function up() {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id(); // Primary key (schedule_id)
            $table->unsignedBigInteger('bus_id'); // ID bus yang terkait
            $table->time('departure_time'); // Waktu keberangkatan
            $table->time('arrival_time'); // Waktu kedatangan
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('schedules');
    }
}
?>
