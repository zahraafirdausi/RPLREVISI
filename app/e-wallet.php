<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ewallet extends Model
{
    protected $table =['e-wallet'];
    //protected $fillable = ['saldo'];

    public function user()
    {
        return $table->belongsTo('App\user');
    }
}