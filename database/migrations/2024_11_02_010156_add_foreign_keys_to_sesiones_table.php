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
        Schema::table('sesiones', function (Blueprint $table) {
            $table->foreign(['nivel_dificultades_id'], 'fk_sesiones_nivel_dificultades1')->references(['id'])->on('nivel_dificultades')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['talleres_id'], 'fk_sesiones_talleres1')->references(['id'])->on('talleres')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sesiones', function (Blueprint $table) {
            $table->dropForeign('fk_sesiones_nivel_dificultades1');
            $table->dropForeign('fk_sesiones_talleres1');
        });
    }
};
