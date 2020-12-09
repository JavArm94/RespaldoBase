<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id('id');
            $table->string('informacion',45);
            $table->string('tipoNotificacion',25);
            $table->date('fecha');
            $table->time('hora');
            $table->timestamp('fechaNotificacion');
            
            $table->timestamps();

            $table->foreignId('idTipoUsuarioDestinatario')->references('id')->on('tipo_usuarios');
            $table->foreignId('idUsuarioDestinatario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
