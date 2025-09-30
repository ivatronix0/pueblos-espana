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
        Schema::create('pueblos', function (Blueprint $table) {
            $table->id();
            $table->string('Cod_mun');
            $table->string('Mun');
            $table->string('Codi_c');
            $table->string('Comarca');
            $table->string('Provincia');
            $table->string('Descripcion');
            $table->string('Foto')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pueblos');
    }
};
