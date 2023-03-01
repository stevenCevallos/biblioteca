<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = DB::all("books");
        $categories = DB::all("categories");

        foreach ($books as $book) {
            $randomCategories = $categories->random(rand(1, 3));
            foreach ($randomCategories as $category) {
                DB::table('book_category')->insert([
                    'book_id' => $book->id,
                    'category_id' => $category->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
