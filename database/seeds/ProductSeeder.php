<?php

use App\products;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products = [
            [
                "name"=>"Mobile Phone",
                "price"=>"10000",
                "description"=>"samsung mobile phone",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],
            [
                "name"=>"Headphones",
                "price"=>"1500",
                "description"=>"Boat Headphones wireless",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],
            [
                "name"=>"Pendrive",
                "price"=>"600",
                "description"=>"Sandisk Pendrive 32gb",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],
            [
                "name"=>"Smart TV",
                "price"=>"20000",
                "description"=>"LG smart tv",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],
            [
                "name"=>"Dell Laptop",
                "price"=>"50000",
                "description"=>"dell laptop 4gb 500gb",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],
            [
                "name"=>"Hard Drive",
                "price"=>"3500",
                "description"=>"Samsung Hard drive 1TB",
                "image"=>$faker->imageUrl($width = 400, $height = 400)
            ],

        ];

        foreach($products as $key=>$val){
            products::create($val);
        }
    }
}
