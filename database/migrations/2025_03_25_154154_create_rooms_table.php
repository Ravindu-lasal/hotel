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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // Auto-incremental RoomID
            $table->string('room_number', 10)->unique();
            $table->string('room_type', 50);
            $table->decimal('price_per_night', 10, 2);
            $table->integer('capacity');
            $table->text('description')->nullable();
            $table->text('overview')->nullable();
            $table->text('advance_facilities')->nullable();
            $table->text('challenge')->nullable();
            $table->enum('status', ['Available', 'Occupied', 'Maintenance', 'Reserved'])->default('Available');
            $table->boolean('is_accessible')->default(false);
            $table->timestamps(); // Adds created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
