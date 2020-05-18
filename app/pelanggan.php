<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = "pelanggans";
    protected $fillable = ['tanggal_transaksi', 'alamat', 'no_telepon', 'pilihan_paket_laundry', 'berat', 'diskon_reward', 'status_pembayaran', 'total_bayar'];

    //'status_order' diilangin

protected $primaryKey = 'id_order';

    public function user()
    {
        return $table->belongsTo('App\user');
    }
}
