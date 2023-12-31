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
            // $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
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
            $table->text('image_path')->nullable();
            
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