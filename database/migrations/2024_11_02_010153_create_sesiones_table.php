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
        Schema::create('sesiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema', 45);
            $table->timestamp('fecha')->nullable();
            $table->string('ubicacion', 45)->nullable();
            $table->string('instructor', 45)->nullable();
            $table->string('sesionescol', 45)->nullable();
            $table->unsignedInteger('nivel_dificultades_id')->index('fk_sesiones_nivel_dificultades1_idx');
            $table->unsignedInteger('talleres_id')->index('fk_sesiones_talleres1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
