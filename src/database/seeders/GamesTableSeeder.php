<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            ['name' => '7 Days to Die', 'slug' => '7-days-to-die', 'in_rating' => 1],
            ['name' => 'Ace Online', 'slug' => 'ace-online', 'in_rating' => 1],
            ['name' => 'Aion Online', 'slug' => 'aion-online', 'in_rating' => 1],
            ['name' => 'Allods Online', 'slug' => 'allods-online', 'in_rating' => 1],
            ['name' => 'Arma 3', 'slug' => 'arma-3', 'in_rating' => 1],
            ['name' => 'Battlefield', 'slug' => 'battlefield', 'in_rating' => 1],
            ['name' => 'Cabal Online', 'slug' => 'cabal-online', 'in_rating' => 1],
            ['name' => 'Call of Duty', 'slug' => 'call-of-duty', 'in_rating' => 1],
            ['name' => 'Conquer Online', 'slug' => 'conquer-online', 'in_rating' => 1],
            ['name' => 'Counter Strike', 'slug' => 'counter-strike', 'in_rating' => 1],
            ['name' => 'DayZ', 'slug' => 'dayz', 'in_rating' => 1],
            ['name' => 'Flyff Online', 'slug' => 'flyff-online', 'in_rating' => 1],
            ['name' => 'G.T.A.', 'slug' => 'gta', 'in_rating' => 1],
            ['name' => 'Garrys Mod', 'slug' => 'garrys-mod', 'in_rating' => 1],
            ['name' => 'Half Life', 'slug' => 'half-life', 'in_rating' => 1],
            ['name' => 'Jade Dynasty', 'slug' => 'jade-dynasty', 'in_rating' => 1],
            ['name' => 'Last Chaos', 'slug' => 'last-chaos', 'in_rating' => 1],
            ['name' => 'Left 4 Dead', 'slug' => 'left-4-dead', 'in_rating' => 1],
            ['name' => 'Lineage 2', 'slug' => 'lineage-2', 'in_rating' => 1],
            ['name' => 'Medal of Honor', 'slug' => 'medal-of-honor', 'in_rating' => 1],
            ['name' => 'Metin2', 'slug' => 'metin2', 'in_rating' => 1],
            ['name' => 'Minecraft', 'slug' => 'minecraft', 'in_rating' => 1],
            ['name' => 'Mu-Online', 'slug' => 'mu-online', 'in_rating' => 1],
            ['name' => 'Perfect World', 'slug' => 'perfect-world', 'in_rating' => 1],
            ['name' => 'Quake', 'slug' => 'quake', 'in_rating' => 1],
            ['name' => 'RF Online', 'slug' => 'rf-online', 'in_rating' => 1],
            ['name' => 'Ragnarok Online', 'slug' => 'ragnarok-online', 'in_rating' => 1],
            ['name' => 'Runescape', 'slug' => 'runescape', 'in_rating' => 1],
            ['name' => 'Rust', 'slug' => 'rust', 'in_rating' => 1],
            ['name' => 'Shaiya', 'slug' => 'shaiya', 'in_rating' => 1],
            ['name' => 'Silkroad Online', 'slug' => 'silkroad-online', 'in_rating' => 1],
            ['name' => 'Star Wars', 'slug' => 'star-wars', 'in_rating' => 1],
            ['name' => 'Team Fortress 2', 'slug' => 'team-fortress-2', 'in_rating' => 1],
            ['name' => 'Terraria', 'slug' => 'terraria', 'in_rating' => 1],
            ['name' => 'Ultima Online', 'slug' => 'ultima-online', 'in_rating' => 1],
            ['name' => 'World of Warcraft', 'slug' => 'world-of-warcraft', 'in_rating' => 1],
            ['name' => 'Браузерные игры', 'slug' => 'brauzernye-igry', 'in_rating' => 1],
            ['name' => 'Каналы YouTube', 'slug' => 'kanaly-youtube', 'in_rating' => 1],
            ['name' => 'Продажа золота', 'slug' => 'prodagha-zolota', 'in_rating' => 1],
            ['name' => 'Флешь игры', 'slug' => 'fleshy-igry', 'in_rating' => 1],
            ['name' => 'Хостинг для игр', 'slug' => 'hosting-dlya-igr', 'in_rating' => 1],
            ['name' => 'Online игры', 'slug' => 'online-igry', 'in_rating' => 1],
            ['name' => 'Игровые сайты', 'slug' => 'igrovye-sayty', 'in_rating' => 1],
            // 👇 Теперь пошли те, кто вне рейтинга
            ['name' => 'DOTA 2', 'slug' => 'dota-2', 'in_rating' => 0],
            ['name' => 'League of Legends', 'slug' => 'league-of-legends', 'in_rating' => 0],
            ['name' => 'ARK: Survival Evolved', 'slug' => 'ark-survival-evolved', 'in_rating' => 0],
            ['name' => 'CS 2', 'slug' => 'cs-2', 'in_rating' => 0],
            ['name' => 'Rust Legacy', 'slug' => 'rust-legacy', 'in_rating' => 0],
            ['name' => 'World of Tanks', 'slug' => 'world-of-tanks', 'in_rating' => 0],
            ['name' => 'World of Warships', 'slug' => 'world-of-warships', 'in_rating' => 0],
            ['name' => 'Path of Exile', 'slug' => 'path-of-exile', 'in_rating' => 0],
            ['name' => 'War Thunder', 'slug' => 'war-thunder', 'in_rating' => 0],
            // и т.д. Можно дополнять при желании!
        ];

        foreach ($games as &$game) {
            $game['meta_title'] = $game['name'];
            $game['meta_keyword'] = '';
            $game['meta_description'] = '';
            $game['text'] = '';
            $game['img'] = null;
            $game['created_at'] = now();
            $game['updated_at'] = now();
        }

        DB::table('games')->insert($games);
    }
}
