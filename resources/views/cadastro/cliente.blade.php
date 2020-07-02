@extends('templates/template')

@section('content')

<main class="cadastroCliente">
	<div class="container">
		<h2>Cadastro de Cliente</h2>

		<form action="{{ route('cadastro.cliente.form') }}" method="POST">
			@csrf

			@if(session('success'))
				<div class="success_message">{{ session('success') }}</div>
			@elseif(session('erro'))
				<div class="error_message">{{ session('erro') }}</div>
			@endif

			<table>
				<thead>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><h3>Dados da Criança</h3></td>
					</tr>

					<tr>
						<td>
							<label for="nome_crianca">Nome da Criança</label>
							<input type="text" name="nome_crianca" id="nome_crianca" required>
						</td>

						<td>
							<label for="inst_ensino">Instituição de Ensino</label>
							<input type="text" name="inst_ensino" id="inst_ensino" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="horario">Horário de Estudo</label>
				            <select name="horario" id="horario" required>
				                <option value=""></option>
				                <option value="Matutino">Matutino</option>
				                <option value="Vespertino">Vespertino</option>
				            </select>
						</td>
					</tr>

					<tr>
						<td><h3>Dados do Responsável</h3></td>
					</tr>

					<tr>
						<td>
							<label for="nome_responsavel">Nome do Responsável</label>
							<input type="text" name="nome_responsavel" id="nome_responsavel" required>
						</td>

						<td>
							<label for="cpf">CPF do Responsável</label>
							<input type="text" name="cpf" id="cpf" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="telefone">Telefone</label>
            				<input type="text" name="telefone" id="telefone" required>
						</td>

						<td>
							<label for="cep">CEP</label>
            				<input type="text" name="cep" id="cep" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="estado">Estado</label>
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
						</td>

						<td>
							<label for="endereco">Endereço</label>
            				<input type="text" name="endereco" id="endereco" required>
						</td>

						<td>
							<label for="num_casa">N°</label>
            				<input type="text" name="num_casa" id="num_casa" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="complemento">Complemento</label>
            				<input type="text" name="complemento" id="complemento">
						</td>
					</tr>

					<tr>
						<td><h3>Dados de Acesso</h3></td>
					</tr>

					<tr>
						<td>
							<label for="email">Email</label>
            				<input type="email" name="email" id="email" required>
						</td>

						<td>
							<label for="senha">Senha</label>
            				<input type="password" name="senha" id="senha" minlength="6" required>
						</td>

						<td>
							<label for="repetirSenha">Repetir a Senha</label>
            				<input type="password" name="repetirSenha" id="repetirSenha" minlength="6" required>
						</td>
					</tr>

					<tr>
						<td></td>
						<td></td>

						<td class="submit-container">
							<button type="submit" class="submit">Cadastrar</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</main>

@endsection 