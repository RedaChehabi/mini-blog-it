<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'The Future of AI',
                'content' => 'Artificial Intelligence is transforming the world.',
                'author_id' => 1,
                'category_id' => 1,
            ],
            [
                'title' => 'Healthy Living Tips',
                'content' => 'Here are some tips for a healthier lifestyle.',
                'author_id' => 2,
                'category_id' => 2,
            ],
            [
                'title' => 'Traveling the World',
                'content' => 'Exploring new places is a great way to learn.',
                'author_id' => 3,
                'category_id' => 5,
            ],
        ]);
    }
}
