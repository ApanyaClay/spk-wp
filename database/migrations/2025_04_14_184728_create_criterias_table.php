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
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nama kriteria seperti 'harga', 'kualitas', 'review'
            $table->decimal('weight', 5, 2);  // Bobot kriteria, contoh: 0.3, 0.4, dll.
            $table->enum('type', ['cost', 'benefit']);  // Tipe kriteria: 'cost' atau 'benefit'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterias');
    }
};
