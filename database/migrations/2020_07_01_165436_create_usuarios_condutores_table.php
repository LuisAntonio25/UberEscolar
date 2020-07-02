<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosCondutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_condutores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('cep');
            $table->string('telefone');
            $table->string('estado');
            $table->string('endereco');
            $table->string('num_casa');
            $table->string('complemento');
            $table->string('comprovante_residencia');
            $table->string('categoria_cnh');
            $table->string('num_cnh');
            $table->string('val_cnh');
            $table->string('cnh');
            $table->string('num_permissao');
            $table->string('permissao');
            $table->string('marca_veiculo');
            $table->string('modelo_veiculo');
            $table->string('ano_fabricacao_veiculo');
            $table->string('ano_modelo_veiculo');
            $table->string('assentos_veiculo');
            $table->string('documentos_crlv');
            $table->string('email')->unique();
            $table->string('senha');
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
        Schema::dropIfExists('usuarios_condutores');
    }
}
