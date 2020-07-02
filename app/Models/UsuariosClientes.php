<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosClientes extends Model
{
    protected $table = 'usuarios_clientes';
    protected $fillable = ['nome_responsavel', 'email', 'senha', 'cpf', 'telefone', 'cep', 'estado', 'endereco', 'num_casa', 'complemento', 'nome_crianca', 'inst_ensino', 'horario'];
}
