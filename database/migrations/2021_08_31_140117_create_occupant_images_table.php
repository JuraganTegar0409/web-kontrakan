<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupantImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupant_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId("occupant_id")->constrained();
            $table->string("image_name");
            $table->enum("type", ["ktp", "kk", "surat_nikah"]);
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
        Schema::dropIfExists('occupant_images');
    }
}
