<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Publisher::factory(10)->create();
        $this->call([CategorySeeder::class]);
        Book::factory(10)->create();
        $this->call([BookSeeder::class]);
    }
}
