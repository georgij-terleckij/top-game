<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $guarded = ['id'];

    public function games()
    {
        return $this->belongsToMany(Game::class)->withTimestamps();
    }
}
