<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tensp');
            $table->integer('id_maLoai')->unsigned(); 
            $table->string('Mausac');
            $table->string('KthuocClieu');
            $table->integer('Giatien');
            $table->integer('Giakhuyenmai');
            $table->string('Hinhanh');
            $table->integer('Soluong');
            $table->string('Mota');
            $table->string('Spmoi');

            $table->foreign('id_maLoai')->references('id')->on('LoaiSanPham')->onDelete('cascade');

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
        Schema::dropIfExists('SanPham');
    }
}
