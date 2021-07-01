<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDonBan', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('Ngayban');
            $table->integer('id_maKH')->unsigned();
            $table->integer('Tongtien');
            $table->string('Trangthai');
            $table->string('Ghichu');

            $table->foreign('id_maKH')->references('id')->on('KhachHang')->onDelete('cascade');

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
        Schema::dropIfExists('HoaDonBan');
    }
}
