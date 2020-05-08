<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_reward extends Model
{
    public function user()
    {
        return $table->belongsTo('App\user');
    }

    public function reward()
    {
        return $table->belongsTo('App\reward');
    } 
}
