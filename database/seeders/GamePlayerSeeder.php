<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Player;

class GamePlayerSeeder extends Seeder
{
    public function run()
    {
        $game = Game::find(1);
        $game->players()->attach(1, ['score' => 100]);

        $game = Game::find(2);
        $game->players()->attach(2, ['score' => 80]);
    }
}
