<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function cadCliente(Request $request) {
        $nomeCrianca = $request->nomeCrianca;
        $instEnsino = $request->instEnsino;
        $horario = $request->horario;
        $cep = $request->cep;
        $endereco = $request->endereco;
        $estado = $request->estado;
        $complemento = $request->complemento;
        $nomeResponsavel = $request->nomeResponsavel;
        $telefone = $request->telefone;
        $email = $request->email;
        $senha = $request->senha;
        $repetirSenha = $request->repetirSenha;

        // Cadastra no Banco de dados

        echo 'Cadastro Realizado!';
    }
}
