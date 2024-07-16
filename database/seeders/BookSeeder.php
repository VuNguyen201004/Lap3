<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0 ; $i < 10 ; $i++){
            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => $faker->imageUrl(),
                'author' => $faker->name() .' '. $faker->lastName(),
                'publisher' => $faker->text(25),
                'publication' => $faker->date(),
                'price' => rand(10,100),
                'quanlity' => rand(10,1000),
                'category_id' => rand(1,3)
            ]);
        }
    }
}
