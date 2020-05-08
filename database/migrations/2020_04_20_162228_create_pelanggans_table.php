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
            $table->bigIncrements('id_order');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users');
            $table->date('tanggal_transaksi');
            $table->text('alamat');
            $table->integer('no_telepon');
            $table->enum('pilihan_paket_laundry',['Standart (5 Day)', 'Premium (3 Day)', 'Express (2 Day)', 'DryClean (1 Day)']);
            $table->integer('berat');
            $table->integer('diskon_reward');
            $table->enum('status_pembayaran', ['cod', 'e-wallet']);
            $table->integer('total_bayar');
            $table->string('status_order');
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
