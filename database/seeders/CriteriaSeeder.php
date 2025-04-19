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
            ['name' => 'salicylic_acid', 'weight' => 0.2, 'type' => 'facial_wash'],
            ['name' => 'tea_tree_oil', 'weight' => 0.2, 'type' => 'facial_wash'],
            ['name' => 'sulfur', 'weight' => 0.2, 'type' => 'facial_wash'],
            ['name' => 'aha_bha', 'weight' => 0.2, 'type' => 'facial_wash'],
            ['name' => 'aloe_vera', 'weight' => 0.2, 'type' => 'facial_wash'],
            ['name' => 'niacinamide', 'weight' => 0.2, 'type' => 'moisturizer'],
            ['name' => 'centella_asiatica', 'weight' => 0.2, 'type' => 'moisturizer'],
            ['name' => 'hyaluronic_acid', 'weight' => 0.2, 'type' => 'moisturizer'],
            ['name' => 'ceramide', 'weight' => 0.2, 'type' => 'moisturizer'],
            ['name' => 'birch_sap', 'weight' => 0.2, 'type' => 'moisturizer'],
            ['name' => 'salicylic_acid', 'weight' => 0.25, 'type' => 'sunscreen'],
            ['name' => 'niacinamide', 'weight' => 0.25, 'type' => 'sunscreen'],
            ['name' => 'zinc_oxide', 'weight' => 0.25, 'type' => 'sunscreen'],
            ['name' => 'centella_asiatica', 'weight' => 0.25, 'type' => 'sunscreen'],
        ];

        foreach ($criteria as $c) {
            Criteria::create($c);
        }
    }
}

