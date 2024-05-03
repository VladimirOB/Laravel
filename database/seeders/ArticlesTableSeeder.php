<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
  
    public function run(): void {
        //Давайте урежем наши существующие записи, чтобы начать с нуля.
        Article::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++){
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
