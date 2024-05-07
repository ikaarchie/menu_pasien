<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPasiensTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('ruangan');
            $table->string('kelas');
            $table->string('jaminan');
            $table->string('mrn');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('dpjp');
            $table->string('diagnosa');
            $table->string('makan_pagi');
            $table->string('snack_pagi');
            $table->string('makan_siang');
            $table->string('snack_siang');
            $table->string('makan_sore');
            $table->string('keterangan');
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
        Schema::dropIfExists('menu_pasiens');
    }
}
