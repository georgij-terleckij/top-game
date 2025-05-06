<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $guarded = ['id'];

    public function game() {
        return $this->hasMany(Game::class);
//        return $this->hasMany(Publisher::class);
    }
}
