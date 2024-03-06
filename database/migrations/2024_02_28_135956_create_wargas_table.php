<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->integer('kode_kelurahan');
            $table->integer('kode_kecamatan');
            $table->integer('kode_organisasi');
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('jabatan');
            $table->integer('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wargas');
    }
};
