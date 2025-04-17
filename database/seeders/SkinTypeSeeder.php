<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SkinType;

class SkinTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'berminyak' => [
                'konten' => 'Kulit berminyak memiliki produksi sebum berlebih, terutama di area T-zone. Perlu perawatan untuk mengontrol minyak, membersihkan pori, dan mencegah jerawat.',
                'bahan' => ['Salicylic Acid', 'Niacinamide', 'Tea Tree Oil', 'Zinc PCA'],
                'tips' => [
                    'Gunakan pembersih berbasis gel atau busa.',
                    'Pilih toner yang mengandung BHA (salicylic acid).',
                    'Gunakan pelembap ringan dan non-komedogenik.',
                    'Hindari produk berbasis minyak.'
                ]
            ],
            'berjerawat' => [
                'konten' => 'Kulit ini rentan terhadap jerawat dan peradangan. Perlu bahan aktif yang efektif tapi tetap lembut.',
                'bahan' => ['Benzoyl Peroxide', 'Salicylic Acid', 'Centella Asiatica', 'Retinoid'],
                'tips' => [
                    'Gunakan cleanser khusus anti-acne.',
                    'Hindari menyentuh wajah dengan tangan kotor.',
                    'Gunakan spot treatment.',
                    'Pilih sunscreen non-komedogenik.'
                ]
            ],
            'normal' => [
                'konten' => 'Kulit normal memiliki keseimbangan minyak dan kelembapan. Perlu dirawat agar tetap sehat dan terjaga.',
                'bahan' => ['Vitamin C', 'Green Tea Extract', 'Panthenol', 'Hyaluronic Acid'],
                'tips' => [
                    'Gunakan skincare dasar secara rutin (cleanser, toner, moisturizer, sunscreen).',
                    'Eksfoliasi ringan 1-2 kali seminggu.',
                    'Fokus pada perlindungan dari sinar UV dan hidrasi.'
                ]
            ],
            'kering' => [
                'konten' => 'Kulit kering terasa kasar dan mudah mengelupas. Fokus utama perawatan adalah hidrasi dan perlindungan lapisan kulit.',
                'bahan' => ['Hyaluronic Acid', 'Ceramide', 'Glycerin', 'Squalane'],
                'tips' => [
                    'Gunakan pembersih lembut tanpa sabun.',
                    'Gunakan moisturizer yang kaya dan melembapkan.',
                    'Hindari toner berbahan alkohol.',
                    'Gunakan face oil sebelum tidur.'
                ]
            ]
        ];

        foreach ($types as $type => $data) {
            SkinType::create([
                'name' => $type,
                'konten' => $data['konten'],
                'bahan' => json_encode($data['bahan']),
                'tips' => json_encode($data['tips'])
            ]);
        }
    }
}
