<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->bigIncrements('no_order');
            $table->date('tanggal_transaksi');
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->integer('no_telepon');
            $table->enum('pilihan_paket_laundry',['Standart (5 Day)', 'Premium (3 Day)', 'Express (2 Day)', 'DryClean (1 Day)']);
            $table->integer('berat');
            $table->integer('diskon');
            $table->integer('total_bayar');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}
