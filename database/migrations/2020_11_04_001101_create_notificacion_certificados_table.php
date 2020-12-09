<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion_certificados', function (Blueprint $table) {
            $table->id('id');
            
            $table->timestamps();

            $table->foreignId('idCertificado')->references('id')->on('certificados');    
            $table->foreignId('idNotificacion')->references('id')->on('notificaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacion_certificados');
    }
}
