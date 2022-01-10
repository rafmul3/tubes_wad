<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGabungPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gabung_packages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('menu');
            $table->string('harga');
            $table->string('description', 255)->nullable();
            $table->string('gambar',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gabung_packages');
    }
}
