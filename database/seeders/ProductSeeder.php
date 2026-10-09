<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => '911 GT3 RS',
                'category' => 'sportcar',
                'description' => 'Sports coupe dengan performa tinggi dan tampilan agresif.',
                'image' => 'GT3 RS.PNG',
                'price' => 2450000,
            ],
            [
                'name' => 'Macan',
                'category' => 'suv',
                'description' => 'SUV premium yang ideal untuk kebutuhan harian dan touring.',
                'image' => 'MACAN.png',
                'price' => 1850000,
            ],
            [
                'name' => 'Sedan Turbo',
                'category' => 'sedan',
                'description' => 'Sedan mewah dengan desain elegan dan kualitas berkendara premium.',
                'image' => 'SEDAN.png',
                'price' => 2200000,
            ],
        ];

        foreach ($products as $product) {
            Product::firstOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
