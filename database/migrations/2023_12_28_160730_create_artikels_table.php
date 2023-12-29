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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->unsignedBigInteger('user_id');
            $table->string('judul', 150);
            $table->string('penulis', 30);
            $table->text('isi_artikel');
            $table->date('tgl_artikel');
            $table->string('gambar');
            $table->enum('status',['publish','draf']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id_users')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};