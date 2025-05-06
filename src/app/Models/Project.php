<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['_token', 'id', 'img', 'version', 'type'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function versions()
    {
        return $this->belongsToMany(Version::class)->withTimestamps();
    }

    public function types()
    {
        return $this->belongsToMany(Type::class)->withTimestamps();
    }

//    public function detail() {
//        return $this->belongsTo(Details::class);
//    }

    public static function CheckAndAddViewed($id)
    {
        $data = Project::find($id);
        if (!empty($data)) {
            $data->viewed++;
            $data->save();
        }
        return $data;
    }
}
