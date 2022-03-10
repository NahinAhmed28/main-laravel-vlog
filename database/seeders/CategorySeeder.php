<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker\Factory::create();
        $filePath = public_path('uploads/categoryFiles');
        if(!File::exists($filePath)){
            File::makeDirectory($filePath);
        }
        for ($i = 0; $i < 3; $i++) {
            \App\Models\Category::create([
                'title' => $faker->realText(30),
                'description' => $faker->realText(200),
                'file_path' =>$faker->image($filePath,640,480, null, false),
                'status' => '1'

            ]);
        }


    }
}
