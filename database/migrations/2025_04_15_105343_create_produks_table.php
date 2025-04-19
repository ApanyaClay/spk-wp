<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->foreignId('skin_type_id')->constrained('skin_types')->onDelete('cascade');
            $table->string('jenis_produk');
            $table->integer('harga');
            $table->float('rating');
            $table->integer('popularitas');
            $table->string('gambar');
            $table->integer('salicylic_acid')->default(0);
            $table->integer('tea_tree_oil')->default(0);
            $table->integer('sulfur')->default(0);
            $table->integer('aha_bha')->default(0);
            $table->integer('aloe_vera')->default(0);
            $table->integer('niacinamide')->default(0);
            $table->integer('centella_asiatica')->default(0);
            $table->integer('hyaluronic_acid')->default(0);
            $table->integer('ceramide')->default(0);
            $table->integer('birch_sap')->default(0);
            $table->integer('zinc_oxide')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
