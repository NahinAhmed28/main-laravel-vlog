<?php

namespace Database\Seeders;

use App\Models\Post;
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
                'post_id' => Post::pluck('id')->random(),
                'title' => $faker->realText(30),
                'description' => $faker->realText(200),
                'status' => '1'
            ]);
        }
    }
}
