<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table("books")->insert([
                'isbn' => $faker->unique()->isbn10,
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'published_date' => $faker->date(),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 0, 100),
                'created_at'=> $faker->dateTime(),
                'updated_at'=> $faker->dateTime(),
            ]);
        }
    }
}
