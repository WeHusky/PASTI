<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ruang_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kaprodi');
            $table->string('departemen');
            $table->string('ruang');
            $table->integer('kapasitas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ruang_kelas');
    }
};