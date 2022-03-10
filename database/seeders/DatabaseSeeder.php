<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'User'
        ]);

        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user'.'@gmail.com',
            'password' =>Hash::make('password'),
            'role_id' => '2',
            'email_verified_at' => now(),
            'created_at'=>	now(),
                'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin'.'@gmail.com',
            'password' =>Hash::make('password'),
            'role_id' => '1',
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        $this->call(CategorySeeder::class);
        $this->command->info('Category table seeded!');

        $this->call(PostSeeder::class);
        $this->command->info('post table seeded!');

        $this->call(CommentSeeder::class);
        $this->command->info('comment table seeded!');
    }
}
