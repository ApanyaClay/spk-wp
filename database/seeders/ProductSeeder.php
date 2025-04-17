<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\SkinType;
use App\Models\Score;
use App\Models\Criteria;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Cleanser A',
                'skin_types' => ['berminyak', 'berjerawat'],
                'scores' => ['harga' => 20000, 'kualitas' => 4, 'review' => 3],
            ],
            [
                'name' => 'Toner B',
                'skin_types' => ['normal', 'kering'],
                'scores' => ['harga' => 30000, 'kualitas' => 5, 'review' => 4],
            ],
            [
                'name' => 'Moisturizer C',
                'skin_types' => ['berminyak', 'normal'],
                'scores' => ['harga' => 25000, 'kualitas' => 4.5, 'review' => 4],
            ],
            [
                'name' => 'Serum D',
                'skin_types' => ['berjerawat', 'kering'],
                'scores' => ['harga' => 50000, 'kualitas' => 5, 'review' => 5],
            ],
            [
                'name' => 'Sunscreen E',
                'skin_types' => ['normal', 'berminyak', 'kering'],
                'scores' => ['harga' => 35000, 'kualitas' => 4.2, 'review' => 4.3],
            ],
        ];
    
        $criteriaList = Criteria::all()->keyBy('name');
    
        foreach ($products as $data) {
            $product = Product::create(['name' => $data['name']]);
    
            // Relasi ke skin_types
            foreach ($data['skin_types'] as $skin) {
                $skinType = SkinType::where('name', $skin)->first();
                $product->skinTypes()->attach($skinType);
            }
    
            // Nilai kriteria
            foreach ($data['scores'] as $crit => $value) {
                Score::create([
                    'product_id' => $product->id,
                    'criteria_id' => $criteriaList[$crit]->id,
                    'value' => $value,
                ]);
            }
        }
    }
}

