<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriaCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditoria_certificados', function (Blueprint $table) {
            $table->id('id');
            $table->date('fechaModificacion');
            $table->time('horaModificacion');
            $table->string('tipoModificacion',1);
            $table->integer('diasDeAusencia');
            $table->bigInteger('numeroComprobante');
            $table->date('fechaVencimiento');
            $table->date('fechaCertificado');
            $table->binary('imagen')->nullable();
            $table->enum('estadoCerficado',['Pendiente','Justificado','Injustificado','Vencido','Finalizado']);

            $table->timestamps();

            $table->foreignId('idUsuarioCertificado')->references('id')->on('usuarios');
            $table->foreignId('idUsuarioQueModifica')->references('id')->on('usuarios');
            $table->foreignId('idPatologia')->references('id')->on('patologias');
            $table->foreignId('idMedico')->references('id')->on('medicos');
            $table->foreignId('idTipoCertificado')->references('id')->on('tipo_certificados');
            $table->foreignId('idFamiliar')->nullable()->references('id')->on('familiares'); 
            $table->foreignId('idCertificado')->references('id')->on('certificados');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditoria_certificados');
    }
}
