<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('rumah_sakits', function (Blueprint $table) {
        $table->id();
        $table->string('nama_rumah_sakit');
        $table->text('alamat_lengkap');
        $table->string('no_telepon');
        $table->string('tipe_rumah_sakit');
        $table->string('latitude');
        $table->string('longitude');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumah_sakits');
    }
};
