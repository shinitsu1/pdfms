<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->string('last_name');
            $table->string('vehiclePlate');
            $table->double('latitude', 10, 6);
            $table->double('longitude', 10, 6);
            $table->timestamp('timestamp')->useCurrent();
            // Add more columns as needed for tracking information
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
