<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reward extends Model
{
    protected $table ='rewards';
    protected $primarykey ='id_reward';
    protected $fillable = ['gambar_reward', 'judul_reward', 'kode_reward', 'deskripsi'];

    public function user_reward()
    {
        return $table->hasMany('App\user_reward');
    }
}
