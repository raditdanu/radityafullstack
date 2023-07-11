<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 20)->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('jenis_kelamin', 15)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->integer('umur_bulan')->length(4)->nullable();
            $table->string('propinsi_id', 2)->nullable();
            $table->string('kota_id', 4)->nullable();
            $table->text('alamat_pasien')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
