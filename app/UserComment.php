<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserComment extends Model
{
    protected $table="user_comments";
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
