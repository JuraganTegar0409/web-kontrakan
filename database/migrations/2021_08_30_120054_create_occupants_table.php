<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_penghuni');
            $table->enum('agama_penghuni', ['Islam', 'Protestan', 'Katolik', 'Buddha', 'Khonghucu']);
            $table->integer('umur_penghuni'); 
            $table->enum('jenis_kelamin_penghuni', ['Laki-Laki', 'Perempuan']);
            $table->enum('status_penghuni', ['Kawin', 'Belum Kawin']);
            $table->string('foto_ktp');
            $table->string('foto_surat_nikah');
            $table->string('foto_kk'); 
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
        Schema::dropIfExists('occupants');
    }
}
