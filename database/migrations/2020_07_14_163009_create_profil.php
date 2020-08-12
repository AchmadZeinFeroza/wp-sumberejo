<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->bigIncrements('id_profil');
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('struktur')->nullable();
            $table->string('visi')->nullable();
            $table->string('misi')->nullable();
            $table->string('penduduk')->nullable();
            $table->string('luas')->nullable();
            $table->string('dusun')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('gmail')->nullable();
            $table->string('telpon')->nullable();
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
        Schema::dropIfExists('profil');
    }
}
