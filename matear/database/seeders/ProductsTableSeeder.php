<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mate de Acero',
            'slug' => 'mate-acero',
            'details' => 'Acero inoxidable, 8 cm de diametro.',
            'price' => 3499.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-acero',
            'category_id' => 1,
            'image_path' => 'mate-acero.png'
        ]);
        Product::create([
            'name' => 'Bolso matero',
            'slug' => 'bolso-mate',
            'details' => 'Bolso matero simil cuero',
            'price' => 5499.99,
            'shipping_cost' => 29.99,
            'description' => 'bolso-matero',
            'category_id' => 2,
            'image_path' => 'bolso-mate.jpg'
        ]);
    }
}
