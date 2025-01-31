<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration {
    public function up() {
        Schema::create('routes', function (Blueprint $table) {
            $table->id(); // Primary key (route_id)
            $table->string('start_point');
            $table->string('end_point');
            $table->json('stops'); // Pemberhentian di sepanjang rute
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('routes');
    }
}
?>
