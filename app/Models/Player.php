<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username'];

    public function games()
    {
        return $this->belongsToMany(Game::class)->withPivot('score');
    }
}