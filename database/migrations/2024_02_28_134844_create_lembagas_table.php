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
        Schema::create('lembagas', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_kelurahan');
            $table->integer('kode_kecamatan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenjang');
            $table->string('jenis_lembaga');
            $table->string('email');
            $table->string('website');
            $table->string('no_kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembagas');
    }
};
