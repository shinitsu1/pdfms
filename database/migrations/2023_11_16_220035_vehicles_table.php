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
        //
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->string('brand');
            $table->string('model');
            $table->string('vin');
            $table->string('name');
            $table->string('status');
            $table->string('unique_identifier')->unique();
            // $table->string('employee_id');
            // $table->string('gender');
            // $table->string('address');
            // $table->string('username');
            // $table->string('shift');
            // $table->string('password');
            // $table->string('emergency_phone');
            // $table->string('position');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('vehicles');
    }
};
