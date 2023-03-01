<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table("categories")->insert([
                'name' => $faker->word,
                'created_at'=> $faker->dateTime(),
                'updated_at'=> $faker->dateTime(),
            ]);
        }
    }
}