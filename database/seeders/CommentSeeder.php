<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
class CommentSeeder extends Seeder
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
            \App\Models\Comment::create([
                'post_id' => $$faker->randomNumber(3),
                'title' => $faker->realText(30),
                'description' => $faker->realText(200),
                'file_path' => 'abs',
                'status' => '1'
            ]);
        }
    }
}
