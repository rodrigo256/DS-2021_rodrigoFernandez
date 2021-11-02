<?php

namespace Database\Seeders;

use App\Models\Product;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function readJsonImport(): array
    {

        $jsonData = file_get_contents("database/data/jsonProductosTeamCinco.json", true);

        $data = json_decode($jsonData);
        
        return $data;
    }


    public function run()
    {
        $data = $this->readJsonImport();
        $id_category  = 8;

        foreach ($data as $da) {
            Product::create([
                'name' => $da->Nombre,
                'slug' => $da->Slug,
                'price' => $da->Precio,
                'shipping_cost' => 29.99,
                'description' => $da->Descripcion,
                'category_id' => $id_category += 1,
                'image_path' => $da->Imagen
            ]);
        }

        Product::create([
            'name' => 'Mate de Acero',
            'slug' => 'mate-acero',
            'price' => 3499.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-acero',
            'category_id' => 1,
            'image_path' => 'mate-acero.png'
        ]);
        Product::create([
            'name' => 'Bolso matero',
            'slug' => 'bolso-mate',
            'price' => 5499.99,
            'shipping_cost' => 29.99,
            'description' => 'bolso-matero',
            'category_id' => 2,
            'image_path' => 'bolso-mate.jpg'
        ]);
        Product::create([
            'name' => 'Matera gajos pelota negra',
            'slug' => 'bolso-mate-gajos',

            'price' => 3599.00,
            'shipping_cost' => 29.99,
            'description' => 'Bolso matero simil cuero',
            'category_id' => 3,
            'image_path' => 'matera-gajos-pelota-negra.jpg'
        ]);
        Product::create([
            'name' => 'Imperial escudo nacional',
            'slug' => 'mate-imperial',
            'price' => 9250.00,
            'shipping_cost' => 29.99,
            'description' => 'mate-imperial',
            'category_id' => 4,
            'image_path' => 'imperial-escudo-nacional.jpg'
        ]);
        Product::create([
            'name' => 'Imperial con apliques',
            'slug' => 'mate-con-apliques',
            'price' => 15500.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-matero',
            'category_id' => 5,
            'image_path' => 'imperial-con-apliques.jpg'
        ]);
        Product::create([
            'name' => 'Imperial crocco',
            'slug' => 'mate-crocco',
            'price' => 8200.99,
            'shipping_cost' => 29.99,
            'description' => 'mate-crocco',
            'category_id' => 6,
            'image_path' => 'imperial-crocco-.jpg'
        ]);
        Product::create([
            'name' => 'Yerba reiverde',
            'slug' => 'yerba',
            'price' => 950.99,
            'shipping_cost' => 29.99,
            'description' => 'yerba',
            'category_id' => 7,
            'image_path' => 'yerba-reiverde.jpg'
        ]);
        Product::create([
            'name' => 'Imperial patitas tornasolado',
            'slug' => 'imperial-patitas',
            'price' => 12980.99,
            'shipping_cost' => 29.99,
            'description' => 'mate',
            'category_id' => 8,
            'image_path' => 'imperial-patitas-tornasolado.jpg'
        ]);
    }
}
