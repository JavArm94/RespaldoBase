<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->id('id');
            $table->integer('diasDeAusencia');
            $table->string('lugar',45);
            $table->bigInteger('numeroComprobante');
            $table->date('fechaVencimiento');
            $table->date('fechaCertificado');
            $table->binary('imagen')->nullable();
            $table->enum('estadoCertificado',['Pendiente','Justificado','Injustificado','Vencido','Finalizado']);

          
            $table->timestamps();

            $table->foreignId('idUsuarioCertificado')->references('id')->on('users');
            $table->foreignId('idPatologia')->references('id')->on('patologias');
            $table->foreignId('idMedico')->references('id')->on('medicos');
            $table->foreignId('idTipoCertificado')->references('id')->on('tipo_certificados');
            $table->foreignId('idFamiliar')->nullable()->references('id')->on('familiares'); 
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}











