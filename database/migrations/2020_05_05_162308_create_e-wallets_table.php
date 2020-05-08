<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e-wallets', function (Blueprint $table) {
            $table->bigIncrements('id_wallet');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users');
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    /*
    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e-wallets');
    }
}
