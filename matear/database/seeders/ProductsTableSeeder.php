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
        Product::create([
            'name' => 'Matera gajos pelota negra',
            'slug' => 'bolso-mate-gajos',
            'details' => 'Bolso matero simil cuero',
            'price' => 3599.00,
            'shipping_cost' => 29.99,
            'description' => 'Bolso matero simil cuero',
            'category_id' => 3,
            'image_path' => 'matera-gajos-pelota-negra.jpg'
        ]);
        Product::create([
            'name' => 'Imperial escudo nacional',
            'slug' => 'mate-imperial',
            'details' => 'mate con cuerina',
            'price' => 9250.00,
            'shipping_cost' => 29.99,
            'description' => 'mate-imperial',
            'category_id' => 4,
            'image_path' => 'imperial-escudo-nacional.jpg'
        ]);
        Product::create([
            'name' => 'Imperial con apliques',
            'slug' => 'mate-con-apliques',
            'details' => 'Bolso matero simil cuero',
            'price' => 15500.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-matero',
            'category_id' => 5,
            'image_path' => 'imperial-con-apliques.jpg'
        ]);
        Product::create([
            'name' => 'Imperial crocco',
            'slug' => 'mate-crocco',
            'details' => 'Imperial crocco',
            'price' => 8200.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-crocco',
            'category_id' => 6,
            'image_path' => 'imperial-crocco-.jpg'
        ]);
        Product::create([
            'name' => 'Yerba reiverde',
            'slug' => 'yerba',
            'details' => 'Yerba Reiverde X 1KG',
            'price' => 950.99,
            'shipping_cost' => 29.99,
            'description' => 'yerba',
            'category_id' => 7,
            'image_path' => 'yerba-reiverde.jpg'
        ]);
        Product::create([
            'name' => 'Imperial patitas tornasolado',
            'slug' => 'imperial-patitas',
            'details' => 'Mate patitas',
            'price' => 12980.99,
            'shipping_cost' => 29.99,
            'description' => 'mate',
            'category_id' => 8,
            'image_path' => 'imperial-patitas-tornasolado.jpg'
        ]);
    }
}
