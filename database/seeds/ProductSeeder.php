<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 200 products
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $product = new Product();

            $product->name        = $faker->text(20);
            $product->description = $faker->text(150);
            $product->details     = $faker->text(1000);
            $product->price       = $faker->randomFloat(2,10,100);
            $product->pubdate     = $faker->dateTimeBetween('now', '+5 years');

            $product->save();
        }
    }
}
