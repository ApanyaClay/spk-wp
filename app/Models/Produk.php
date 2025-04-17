<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks'; // nama tabel di database

    protected $fillable = [
        'nama',
        'deskripsi',
        'jenis_produk',
        'jenis_kulit',
        'harga',
        'rating',
        'popularitas',
        'gambar',
        'niacinamide',
        'retinol',
        'salicylic_acid',
        'glycolic_acid',
        'hyaluronic_acid',
        'dimethicone',
        'glycerin',
        'vitamin_e',
        'minyak_jojoba',
        'urea',
        'aloe_vera',
        'ceramide',
        'shea_butter',
        'panthenol',
        'formula_oil_free',
        'zinc',
        'squalane',
        'zinc_oxide',
        'oil_free',
        'titanium_dioxide'
    ];
    public function skinType()
    {
        return $this->belongsTo(SkinType::class);
    }
}
