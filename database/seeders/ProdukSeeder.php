<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\SkinType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produk = [
            [
                'nama' => 'COSRX Salicylic Acid Daily Gentle Cleanser',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '1.jpg',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 1,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'Acnes Creamy Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '2.jpg',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 0,
                'sulfur' => 0,
                'aha_bha' => 0,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'Some By Mi AHA BHA PHA 30 Days Miracle Acne Clear Foam',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '3.jpeg',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 1,
                'aloe_vera' => 1,
            ],
            [
                'nama' => 'Senka Perfect Whip Acne Care',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '4.jpeg',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 0,
                'sulfur' => 0,
                'aha_bha' => 0,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'AcneAct  Witch Hazel & BHA Gentle Acne Facial Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '5.png',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 0,
                'sulfur' => 0,
                'aha_bha' => 1,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'NPURE  Centella Asiatica Face Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '6.png',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 0,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'Scarlett Whitening   Acne Facial Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '7.png',
                'salicylic_acid' => 0,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 0,
                'aloe_vera' => 1,
            ],
            [
                'nama' => 'Whitelab Acne Care Facial Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '8.png',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 0,
                'aloe_vera' => 0,
            ],
            [
                'nama' => 'RHA Acneact ACSBP BHA & Sulfur Acne Facial Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '9.jpg',
                'salicylic_acid' => 1,
                'tea_tree_oil' => 0,
                'sulfur' => 1,
                'aha_bha' => 1,
                'aloe_vera' => 1,
            ],
            [
                'nama' => 'Luxiny Tea Tree Face Wash',
                'jenis_produk' => 'facial_wash',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '10.webp',
                'salicylic_acid' => 0,
                'tea_tree_oil' => 1,
                'sulfur' => 0,
                'aha_bha' => 1,
                'aloe_vera' => 1,
            ],
            [
                'nama' => 'The Originote Cica-B5 Soothing Moisturizer',
                'jenis_produk' => 'moisturizer',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '10.webp',
                'niacinamide' => 0,
                'centella_asiatica' => 1,
                'hyaluronic_acid' => 1,
                'ceramide' => 1,
                'birch_sap' => 0,
            ],
            [
                'nama' => 'Glad2Glow Centella Allantoin Soothing Moisturizer Gel',
                'jenis_produk' => 'moisturizer',
                'skin_type_name' => 'berjerawat',
                'deskripsi' => 'Cleanser dengan kandungan serum untuk kulit berminyak.',
                'harga' => 45000,
                'rating' => 4.5,
                'popularitas' => 80,
                'gambar' => '10.webp',
                'niacinamide' => 0,
                'centella_asiatica' => 1,
                'hyaluronic_acid' => 0,
                'ceramide' => 0,
                'birch_sap' => 0,
            ],
        ];

        foreach ($produk as &$item) {
            $item['created_at'] = now();
            $item['updated_at'] = now();
        }

        foreach ($produk as $data) {
            $skinType = SkinType::where('name', $data['skin_type_name'])->first();
            if ($skinType) {
                $data['skin_type_id'] = $skinType->id;
                unset($data['skin_type_name']);
                Produk::create($data);
            }
        }
    }
}
