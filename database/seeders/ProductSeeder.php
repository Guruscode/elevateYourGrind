<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $category = Category::first();

        Product::create([
            'name' => 'Luxury Analog Watch',
            'description' => 'A premium wristwatch for luxury lovers.',
            'price' => 499.99,
            'stock' => 10,
            'brand' => 'Omega',
            'image' => 'default.jpg', // Add an actual image later
            'category_id' => $category->id,
        ]);
    }
}
