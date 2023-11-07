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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('penggunas')->onDelete('cascade');
            $table->string('pekerjaan')->nullable();
            $table->string('city')->nullable();
            $table->string('employer')->nullable();
            $table->string('mulai')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('terakhir')->nullable();
            $table->integer('tambah')->nullable();
            $table->string('deskripsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaans');
    }
};