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
        Schema::create('privats', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->text('ket')->nullable();
            $table->text('waktu')->nullable();
            $table->text('hari')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privats');
    }
};
