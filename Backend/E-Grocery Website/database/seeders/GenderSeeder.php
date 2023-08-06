<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::factory()->createMany([
        ['gender_desc' => 'Male'],
        ['gender_desc' => 'Female']
      ]);
    }
}
