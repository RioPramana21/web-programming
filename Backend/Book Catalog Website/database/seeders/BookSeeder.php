<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding book menggunakan factory

        //seeding book_category
        DB::table('book_category')->insert([
            /*
            book 1 --> category 1
            book 2 --> category 1, 2, 3,
            book 3 --> category 1, 3, 4
            book 4 --> category 3, 4
            book 5 --> category 4
            book 6 --> category 1
            book 7 --> category 2
            book 8 --> category 2, 3
            book 9 --> category 2
            book 10 --> category 3
            */
            [
                "book_id" => 1,
                "category_id" => 1
            ],
            [
                "book_id" => 2,
                "category_id" => 1
            ],
            [
                "book_id" => 2,
                "category_id" => 2
            ],
            [
                "book_id" => 2,
                "category_id" => 3
            ],
            [
                "book_id" => 3,
                "category_id" => 1
            ],
            [
                "book_id" => 3,
                "category_id" => 3
            ],
            [
                "book_id" => 3,
                "category_id" => 4
            ],
            [
                "book_id" => 4,
                "category_id" => 3
            ],
            [
                "book_id" => 4,
                "category_id" => 4
            ],
            [
                "book_id" => 5,
                "category_id" => 4
            ],
            [
                "book_id" => 6,
                "category_id" => 1
            ],
            [
                "book_id" => 7,
                "category_id" => 2
            ],
            [
                "book_id" => 8,
                "category_id" => 2
            ],
            [
                "book_id" => 8,
                "category_id" => 3
            ],
            [
                "book_id" => 9,
                "category_id" => 2
            ],
            [
                "book_id" => 10,
                "category_id" => 3
            ],
        ]);
    }
}
