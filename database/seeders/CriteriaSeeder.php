<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria = [
            ['name' => 'harga', 'weight' => 0.3, 'type' => 'cost'],
            ['name' => 'rating', 'weight' => 0.4, 'type' => 'benefit'],
            ['name' => 'popularitas', 'weight' => 0.3, 'type' => 'benefit'],
        ];

        foreach ($criteria as $c) {
            Criteria::create($c);
        }
    }
}

