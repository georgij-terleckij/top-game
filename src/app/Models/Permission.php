<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
//    protected $fillable = ['key'];

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
