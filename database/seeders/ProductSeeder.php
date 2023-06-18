<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categoryIds = Category::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            $categoryId = $faker->randomElement($categoryIds);
            Product::create([
                'categoryId' => $categoryId,
                'namaProduk' => 'Bunga '.$faker->word,
                'slug' => $faker->unique()->slug,
                'gambar' => $faker->imageUrl(),
                'deskripsi' => $faker->paragraph(1),
                'harga' => $faker->numberBetween(400000, 1000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
