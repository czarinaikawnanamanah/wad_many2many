<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create(['name' => 'John Doe', 'username' => 'johndoe']);
        Player::create(['name' => 'Jane Doe', 'username' => 'janedoe']);
    }
}
