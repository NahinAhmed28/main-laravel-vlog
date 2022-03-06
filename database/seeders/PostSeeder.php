<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Bus\DispatchesJobs;
use File;
use Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Models\Post::create([
                'category_id' => 2,
                'title' => $faker->realText(10),
                'description' => $faker->realText(100),
                'comment' => $faker->randomNumber(5),
                'file_path' => $faker->imageUrl(400, 300),
                'status' => '1',
            ]);
        }
    }
}
