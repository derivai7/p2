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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id');
            $table->foreignId('kelas_id');
            $table->string('nim', 10)->unique();
            $table->string('nama', 50)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('jk', 1)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('hp', 15)->nullable();
            $table->timestamps();
//
//            $table->foreign('prodi_id')->references('id')->on('prodi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('prodi');
            $table->dropForeign(['prodi_id']);
            $table->string('kelas');
            $table->dropForeign(['kelas_id']);
        });
    }
};
