<?php

namespace App\Models;

use Illuminate\Support\Facades\App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
