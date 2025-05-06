<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = ['_token', 'id', 'genre_id'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_game')->withTimestamps();
    }

    public function versions()
    {
        return $this->belongsToMany(Version::class)->withTimestamps();
    }

    public function types()
    {
        return $this->belongsToMany(Type::class)->withTimestamps();
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
