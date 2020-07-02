<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosCondutores extends Model
{
    protected $table = 'usuarios_condutores';
    protected $fillable = ['nome', 'cpf', 'cep', 'telefone', 'estado', 'endereco', 'num_casa', 'complemento', 'comprovante_residencia', 'categoria_cnh', 'num_cnh', 'val_cnh', 'cnh', 'num_permissao', 'permissao', 'marca_veiculo', 'modelo_veiculo', 'ano_fabricacao_veiculo', 'ano_modelo_veiculo', 'assentos_veiculo', 'documentos_crlv', 'email', 'senha', 'repetirSenha'];
}
