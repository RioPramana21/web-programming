<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding 4 categories
        DB::table('categories')->insert([
            ["name" => "Self-help"],
            ["name" => "Fantasy"],
            ["name" => "Comedy"],
            ["name" => "Romance"]
        ]);
    }
}
