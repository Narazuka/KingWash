<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('notelp');
            $table->enum('layanan',['Cuci Luar','Cuci Dalam','Cuci Luar Dalam']);
            $table->string('merk');
            $table->string('plat');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

};
