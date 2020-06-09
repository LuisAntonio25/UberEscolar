<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber Escolar - Cadastro de Cliente</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head> 
<body>
    <div>
        <div class="wrap">
            <div class="content">
                <div class="mainContent cadClientePage">
                    <div class="header">
                        <a href="{{ route('welcome') }}" title="Uber Escolar" class="logo">Uber Escolar</a>
                    </div>
                
                    <form action="{{ route('cadClienteForm') }}" method="POST">
                        @csrf

                        <div class="formContent">
                            <div class="headerForm">
                                <h2>Cadastro de Cliente</h2>
                            </div>

                            <div class="block dadosCrianca">
                                <div class="blockTitle">
                                    <h2>Dados da Criança</h2>
                                </div>

                                <div class="fields">
                                    <label for="nomeCrianca">Nome *</label>
                                    <input type="text" name="nomeCrianca" id="nomeCrianca" required>

                                    <label for="instEnsino">Instituição de Ensino *</label>
                                    <input type="text" name="instEnsino" id="instEnsino" required>

                                    <label for="horario">Horário de Estudo *</label>
                                    <select name="horario" id="horario">
                                        <option value=""></option>
                                        <option value="matutino">Matutino</option>
                                        <option value="vespertino">Vespertino</option>
                                    </select>

                                    <label for="cep">CEP *</label>
                                    <input type="text" name="cep" id="cep" required>

                                    <label for="endereco">Endereço *</label>
                                    <input type="text" name="endereco" id="endereco" required>

                                    <label for="estado">Estado *</label>
                                    <select name="estado" id="estado" required>
                                        <option value=""></option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="DF">Distrito Federal</option>
                                    </select>

                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" id="complemento">
                                </div>
                            </div>

                            <div class="block dadosResponsavel">
                                <div class="blockTitle">
                                    <h2>Dados do Responsável</h2>
                                </div>

                                <div class="fields">
                                    <label for="nomeResponsavel">Nome *</label>
                                    <input type="text" name="nomeResponsavel" id="nomeResponsavel"required>

                                    <label for="telefone">Telefone *</label>
                                    <input type="text" name="telefone" id="telefone" required>

                                    <label for="email">Email *</label>
                                    <input type="email" name="email" id="email" required>

                                    <label for="senha">Senha *</label>
                                    <input type="password" name="senha" id="senha" minlength="6" required>

                                    <label for="repetirSenha">Repetir a Senha *</label>
                                    <input type="password" name="repetirSenha" id="repetirSenha" minlength="6" required>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>

                <div class="footer">
                    <h2>O Uber Escolar</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tellus eu ante ultrices facilisis non quis tortor. Suspendisse rhoncus aliquam est non ullamcorper.</p>
                </div>
            </div>

            <div class="sideBar">
                <nav class="navigation">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('cadCliente') }}">Cadastro de Cliente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
</body>
</html>