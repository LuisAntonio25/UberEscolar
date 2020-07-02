<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_responsavel');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('cep');
            $table->string('estado');
            $table->string('endereco');
            $table->string('num_casa');
            $table->string('complemento');
            $table->string('nome_crianca');
            $table->string('inst_ensino');
            $table->string('horario');
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
        Schema::dropIfExists('usuarios_clientes');
    }
}
