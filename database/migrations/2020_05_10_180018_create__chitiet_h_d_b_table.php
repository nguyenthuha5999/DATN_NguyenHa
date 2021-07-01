<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietHDBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChitietHDB', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Soluongban');
            $table->integer('Giaban');
            $table->integer('id_maHDB')->unsigned();
            $table->integer('id_maSP')->unsigned();

            $table->foreign('id_maHDB')->references('id')->on('HoaDonBan')->onDelete('cascade');
            $table->foreign('id_maSP')->references('id')->on('SanPham');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ChitietHDB');
    }
}
