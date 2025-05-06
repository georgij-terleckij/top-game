<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    public function run(): void
    {
        News::factory()->count(50)->create();
    }
}
