<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class computerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('computers')->insert([
                'computer_name' => $faker->word,
                'model' => $faker->word,
                'operating_system' => $faker->word,
                'processor' => $faker->word,
                'memory' => $faker->numberBetween(4, 64),
                'available' => $faker->boolean,
            ]);
        }
    }
}