<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => '7 Days Survival Server',
                'text' => 'Лучший сервер выживания для 7 Days to Die!',
                'user_id' => 1,
                'game_id' => 1,
                'site_url' => 'https://7days-server.example.com',
                'img' => '7days.jpg',
                'published' => 1,
                'votes' => rand(10, 100),
                'viewed' => rand(100, 1000),
                'link_out' => rand(5, 50),
                'vote_pass' => Str::random(10),
                'vote_url' => 'https://7days-server.example.com/vote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ace Online PvP Server',
                'text' => 'PvP битвы каждый день!',
                'user_id' => 1,
                'game_id' => 2,
                'site_url' => 'https://ace-pvp.example.com',
                'img' => 'ace.jpg',
                'published' => 1,
                'votes' => rand(10, 100),
                'viewed' => rand(100, 1000),
                'link_out' => rand(5, 50),
                'vote_pass' => Str::random(10),
                'vote_url' => 'https://ace-pvp.example.com/vote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aion Online High Rate',
                'text' => 'Высокие рейты, бесплатный донат!',
                'user_id' => 1,
                'game_id' => 3,
                'site_url' => 'https://aion-highrate.example.com',
                'img' => 'aion.jpg',
                'published' => 1,
                'votes' => rand(10, 100),
                'viewed' => rand(100, 1000),
                'link_out' => rand(5, 50),
                'vote_pass' => Str::random(10),
                'vote_url' => 'https://aion-highrate.example.com/vote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Allods PvP Server',
                'text' => 'Лучший сервер Аллодов!',
                'user_id' => 1,
                'game_id' => 4,
                'site_url' => 'https://allods-pvp.example.com',
                'img' => 'allods.jpg',
                'published' => 1,
                'votes' => rand(10, 100),
                'viewed' => rand(100, 1000),
                'link_out' => rand(5, 50),
                'vote_pass' => Str::random(10),
                'vote_url' => 'https://allods-pvp.example.com/vote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Arma 3 RP Server',
                'text' => 'Ролевая игра на высшем уровне!',
                'user_id' => 1,
                'game_id' => 5,
                'site_url' => 'https://arma3-rp.example.com',
                'img' => 'arma3.jpg',
                'published' => 1,
                'votes' => rand(10, 100),
                'viewed' => rand(100, 1000),
                'link_out' => rand(5, 50),
                'vote_pass' => Str::random(10),
                'vote_url' => 'https://arma3-rp.example.com/vote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
