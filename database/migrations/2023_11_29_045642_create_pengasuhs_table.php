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
        Schema::create('pengasuhs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('ttl');
            $table->text('alamat');
            $table->text('gender');
            $table->text('status');
            $table->text('pengajar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengasuhs');
    }
};
