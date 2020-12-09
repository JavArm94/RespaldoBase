<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_certificados', function (Blueprint $table) {
            $table->id('id');
            $table->string('tipoCertificado',30);
            $table->integer('ctdFaltasAnualesJustificadas');
            $table->tinyInteger('solicitaFamiliar');
            $table->integer('diasPresentacionVencimiento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_certificados');
    }
}
