<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

//    protected $fillable = [
//        'ROLE', 'ACTIVE', 'TYPE'
//    ];
    protected $guarded = ['_token', 'id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function game() {
        return $this->belongsTo(Game::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
