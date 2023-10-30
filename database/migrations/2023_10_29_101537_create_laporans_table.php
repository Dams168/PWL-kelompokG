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
        Schema::create('laporans', function (Blueprint $table) {
            $table->char('kode_laporan', 10)->unique();
            $table->date('Tanggal');
            $table->char('kode_pemasukan', 10);
            $table->char('kode_pengeluaran', 10);
            $table->integer('Total');
            $table->timestamps();

            $table->foreign('kode_pemasukan')->references('kode_pemasukan')->on('pemasukans')
                  ->onDelete('cascade')      
                  ->onUpdate('cascade');

            $table->foreign('kode_pengeluaran')->references('kode_pengeluaran')->on('pengeluarans')
                  ->onDelete('cascade')      
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
