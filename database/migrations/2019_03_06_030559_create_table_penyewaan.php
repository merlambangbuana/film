<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenyewaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->increments('id_penyewaan');
            $table->date('tanggal_transaksi');
            $table->date('tanggal_pengembalian');
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('id_film')->unsigned();
            $table->integer('jumlah_film')->unsigned();
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
        Schema::drop('penyewaan');
    }
}
