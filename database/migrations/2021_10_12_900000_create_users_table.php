<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations -----
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           
            
            
            $table->id('id');
            $table->integer('legajo');
            $table->string('apellido',45);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nombreUsuario',30);
            $table->string('password');
            $table->rememberToken();
            $table->date('fechaNacimiento');
            $table->string('direccion',45);            
            $table->bigInteger('numeroDocumento')->unique();
            $table->tinyInteger('estadoBaja');

            $table->softDeletes();

            $table->timestamps('');

            $table->foreignId('idCargo')->references('id')->on('cargos');
            $table->foreignId('idLocalidad')->references('id')->on('localidades');
            $table->foreignId('idTipoDocumento')->references('id')->on('tipo_documentos');
            $table->foreignId('idTipoUsuario')->references('id')->on('tipo_usuarios');
            $table->foreignId('idRol')->references('id')->on('roles');
            $table->foreignId('idGenero')->references('id')->on('generos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
