<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        Game::create(['name' => 'Soccer']);
        Game::create(['name' => 'Basketball']);
    }
}
