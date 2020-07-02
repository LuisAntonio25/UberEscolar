<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuariosClientes;
use App\Models\UsuariosCondutores;

class UsuariosController extends Controller
{

    private $objUsuarioCliente;
    private $objUsuarioCondutor;

    public function __construct() {
        $this->objUsuarioCliente = new UsuariosClientes();
        $this->objUsuarioCondutor = new UsuariosCondutores();
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checkUsuarioCliente = $this->objUsuarioCliente->where([['email', '=', $request->email], ['senha', '=', md5($request->senha)]])->count() > 0;
        $checkUsuarioCondutor = $this->objUsuarioCondutor->where([['email', '=', $request->email], ['senha', '=', md5($request->senha)]])->count() > 0;
        
        if(!$checkUsuarioCliente) {
            if(!$checkUsuarioCondutor) {
                return redirect('login')->with('erro', 'Os dados estão incorretos.');
            }else {
                $user = $this->objUsuarioCondutor->where([['email', '=', $request->email], ['senha', '=', md5($request->senha)]])->first();
            
                session([
                    'user_nome' => $user->nome,
                    'user_email' => $user->email,
                ]);
                
                return redirect()->route('condutores');
            }
        }else {
            $user = $this->objUsuarioCliente->where([['email', '=', $request->email], ['senha', '=', md5($request->senha)]])->first();
            
            session([
                'user_nome' => $user->nome_responsavel,
                'user_email' => $user->email,
            ]);
            
            return redirect()->route('condutores');
        }
    }

    public function list(Request $request)
    {
        $view = $request->route()->action['view'];

        $condutor = $this->objUsuarioCondutor->all();
        return view($view, compact('condutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->route()->action['form'];

        if($form == 'cliente') {
            if($request->senha != $request->repetirSenha) {
                return redirect()->route('cadastro.cliente')->with('erro', 'As senhas não combinam.');
            }else {
                $checkClienteEmail = $this->objUsuarioCliente->where('email', '=', $request->email)->count() > 0;
                $checkCondutorEmail = $this->objUsuarioCondutor->where('email', '=', $request->email)->count() > 0;
                $checkClienteCpf = $this->objUsuarioCliente->where('cpf', '=', $request->cpf)->count() > 0;

                if($checkClienteEmail) {
                    return redirect()->route('cadastro.cliente')->with('erro', 'Este email já está sendo utilizado.');
                }elseif($checkCondutorEmail) {
                    return redirect()->route('cadastro.cliente')->with('erro', 'Este email já está sendo utilizado.');
                }elseif($checkClienteCpf) {
                    return redirect()->route('cadastro.cliente')->with('erro', 'Já existe uma conta com este CPF.');
                }else {
                    $create = $this->objUsuarioCliente->create([
                        'nome_responsavel' => $request->nome_responsavel,
                        'email' => $request->email,
                        'senha' => md5($request->senha),
                        'cpf' => $request->cpf,
                        'telefone' => $request->telefone,
                        'cep' => $request->cep,
                        'estado' => $request->estado,
                        'endereco' => $request->endereco,
                        'num_casa' => $request->num_casa,
                        'complemento' => $request->complemento,
                        'nome_crianca' => $request->nome_crianca,
                        'inst_ensino' => $request->inst_ensino,
                        'horario' => $request->horario
                    ]);

                    if($create) {
                        return redirect()->route('login')->with('success', 'Sua conta foi criada, faça o login');
                    }else {
                        return redirect()->route('cadastro.cliente')->with('erro', 'Ocorreu um erro ao criar sua conta');
                    }
                }
            }
        }elseif($form == 'condutor') {
            if($request->senha != $request->repetirSenha) {
                return redirect()->route('cadastro.condutor')->with('erro', 'As senhas não combinam.');
            }else {
                $checkCondutorEmail = $this->objUsuarioCondutor->where('email', '=', $request->email)->count() > 0;
                $checkClienteEmail = $this->objUsuarioCliente->where('email', '=', $request->email)->count() > 0;
                $checkCondutorCpf = $this->objUsuarioCondutor->where('cpf', '=', $request->cpf)->count() > 0;

                if($checkCondutorEmail) {
                    return redirect()->route('cadastro.condutor')->with('erro', 'Este email já está sendo utilizado.');
                }elseif($checkClienteEmail) {
                    return redirect()->route('cadastro.condutor')->with('erro', 'Este email já está sendo utilizado.');
                }elseif($checkCondutorCpf) {
                    return redirect()->route('cadastro.condutor')->with('erro', 'Já existe uma conta com este CPF.');
                }else {
                    $extensoesPermitidas = ['png', 'jpg', 'jpeg'];

                    $extensao1 = $request->comprovante_residencia->extension();
                    $extensao2 = $request->cnh->extension();
                    $extensao3 = $request->permissao->extension();
                    $extensao4 = $request->documentos_crlv->extension();

                    if(!in_array($extensao1, $extensoesPermitidas)) {
                        return redirect()->route('cadastro.condutor')->with('erro', 'Somente imagens são permitidas.');
                    }elseif (!in_array($extensao2, $extensoesPermitidas)) {
                        return redirect()->route('cadastro.condutor')->with('erro', 'Somente imagens são permitidas.');
                    }elseif (!in_array($extensao3, $extensoesPermitidas)) {
                        return redirect()->route('cadastro.condutor')->with('erro', 'Somente imagens são permitidas.');
                    }elseif (!in_array($extensao4, $extensoesPermitidas)) {
                        return redirect()->route('cadastro.condutor')->with('erro', 'Somente imagens são permitidas.');
                    }else {
                        $imageName1 = $request->comprovante_residencia->hashName();
                        $imageName2 = $request->cnh->hashName();
                        $imageName3 = $request->permissao->hashName();
                        $imageName4 = $request->documentos_crlv->hashName();

                        $request->comprovante_residencia->store('img/condutores/documentos', 'public');
                        $request->cnh->store('img/condutores/documentos', 'public');
                        $request->permissao->store('img/condutores/documentos', 'public');
                        $request->documentos_crlv->store('img/condutores/documentos', 'public');

                        $create = $this->objUsuarioCondutor->create([
                            'nome' => $request->nome,
                            'cpf' => $request->cpf,
                            'cep' => $request->cep,
                            'telefone' => $request->telefone,
                            'estado' => $request->estado,
                            'endereco' => $request->endereco,
                            'num_casa' => $request->num_casa,
                            'complemento' => $request->complemento,
                            'comprovante_residencia' => $imageName1,
                            'categoria_cnh' => $request->categoria_cnh,
                            'num_cnh' => $request->num_cnh,
                            'val_cnh' => $request->val_cnh,
                            'cnh' => $imageName2,
                            'num_permissao' => $request->num_permissao,
                            'permissao' => $imageName3,
                            'marca_veiculo' => $request->marca_veiculo,
                            'modelo_veiculo' => $request->modelo_veiculo,
                            'ano_fabricacao_veiculo' => $request->ano_fabricacao_veiculo,
                            'ano_modelo_veiculo' => $request->ano_modelo_veiculo,
                            'assentos_veiculo' => $request->assentos_veiculo,
                            'documentos_crlv' => $imageName4,
                            'email' => $request->email,
                            'senha' => md5($request->senha)
                        ]);

                        if($create) {
                            return redirect()->route('login')->with('success', 'Sua conta foi criada, faça o login');
                        }else {
                            return redirect()->route('cadastro.condutor')->with('erro', 'Ocorreu um erro ao criar sua conta');
                        }
                    }
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
