<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Article::factory()->count(10)->create();
    }
}
