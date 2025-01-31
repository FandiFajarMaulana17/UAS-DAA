<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration {
    public function up() {
        Schema::create('buses', function (Blueprint $table) {
            $table->id(); // Primary key (bus_id)
            $table->string('number'); // Nomor bus
            $table->integer('capacity'); // Kapasitas bus
            $table->string('status'); // Status bus (e.g., "in service", "out of service")
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('buses');
    }
}
?>
