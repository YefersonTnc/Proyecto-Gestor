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
        Schema::create('notificaciones_tabla', function (Blueprint $table) {
            $table->id();
            $table->text('mensaje');
            $table->timestamp('fecha_envio');
            $table->string('estado_envio');
            $table->string('metodo_envio');
            $table->string('tipo_notificacion');
            $table->boolean('repetir')->default(false);
            $table->string('repetir_intervalo')->nullable();
            $table->timestamp('fecha_enviodo')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones_tabla');
    }
};
