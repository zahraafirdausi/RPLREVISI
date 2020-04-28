<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table =['pelanggan'];
    protected $fillable = ['tanggal_transaksi', 'nama_lengkap', 'alamat', 'no_telepon', 'pilihan_paket_laundry', 'berat', 'diskon', 'total_bayar'];
}
