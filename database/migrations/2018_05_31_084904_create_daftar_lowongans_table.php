<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_lowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Pendidikan');
            $table->string('Keahlian');
            $table->integer('No_Telepon');
            $table->string('CV');
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
        Schema::dropIfExists('daftar_lowongans');
    }
}
