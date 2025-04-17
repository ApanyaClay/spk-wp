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
            $table->string('jenis_produk'); // seperti: berminyak, kering, normal, berjerawat
            $table->integer('harga'); // dalam rupiah (tanpa titik/koma)
            $table->float('rating'); // nilai 1.0 - 5.0
            $table->integer('popularitas'); // misal jumlah review atau angka estimasi lainnya
            $table->string('gambar')->default('https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/WARDAH_Lightening_Micellar_Gentle_Wash_50ml.png'); // URL gambar produk
            $table->integer('niacinamide')->default(0);
            $table->integer('retinol')->default(0);
            $table->integer('salicylic_acid')->default(0);
            $table->integer('glycolic_acid')->default(0);
            $table->integer('hyaluronic_acid')->default(0);
            $table->integer('dimethicone')->default(0);
            $table->integer('glycerin')->default(0);
            $table->integer('vitamin_e')->default(0);
            $table->integer('minyak_jojoba')->default(0);
            $table->integer('urea')->default(0);
            $table->integer('aloe_vera')->default(0);
            $table->integer('ceramide')->default(0);
            $table->integer('shea_butter')->default(0);
            $table->integer('panthenol')->default(0);
            $table->integer('formula_oil_free')->default(0);
            $table->integer('zinc')->default(0);
            $table->integer('squalane')->default(0);
            $table->integer('zinc_oxide')->default(0);
            $table->integer('oil_free')->default(0);
            $table->integer('titanium_dioxide')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
