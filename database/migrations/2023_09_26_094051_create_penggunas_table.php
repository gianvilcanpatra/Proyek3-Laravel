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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('address');
            $table->string('emailUser');
            $table->bigInteger('nomorTelepon');
            $table->date('tanggalLahir');
            $table->text('deskripsi');
            $table->string('country');
            $table->string('image')->nullable();
            
            // $table->enum('');

            $table->string('pendidikanFormal')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('tahunPendidikan')->nullable();

            $table->string('pekerjaan')->nullable();
            $table->string('City')->nullable();
            $table->string('Employer')->nullable();
            $table->string('Start')->nullable();
            $table->string('Year')->nullable();
            $table->string('End')->nullable();
            $table->string('Years')->nullable();
            $table->string('deskripsis')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
