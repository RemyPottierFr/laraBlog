<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
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
        User::factory(9)->create();
        User::factory(1)->create([
            "name" => "Rémy Pottier",
            "job" => "Web Developer",
            "email" => "dev@dev.com",
            "password" => bcrypt("password"),
            "picture" => "https://via.placeholder.com/640x480.png/005566?text=RP"
        ]);
        Article::factory(10)->create();
    }
}
