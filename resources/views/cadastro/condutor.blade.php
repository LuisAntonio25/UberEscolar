 @extends('templates/template')

@section('content')

<main class="cadastroCondutor">
	<div class="container">
		<h2>Cadastro de Condutor</h2>

		<form action="{{ route('cadastro.condutor.form') }}" method="POST" enctype="multipart/form-data">
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
						<td>
							<label for="nome">Seu Nome</label>
							<input type="text" name="nome" id="nome" required>
						</td>

						<td>
							<label for="cpf">CPF</label>
							<input type="text" name="cpf" id="cpf" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="cep">CEP</label>
            				<input type="text" name="cep" id="cep" required>
						</td>

						<td>
							<label for="telefone">Telefone</label>
            				<input type="text" name="telefone" id="telefone" required>
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

						<td>
							<label for="comprovante_residencia">Comprovante de Residência</label>
							<input type="file" name="comprovante_residencia" id="comprovante_residencia" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="categoria_cnh">Categoria da CNH</label>
							<select name="categoria_cnh" id="categoria_cnh" required>
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
							</select>
						</td>

						<td>
							<label for="num_cnh">N° de Registro da CNH</label>
							<input type="text" name="num_cnh" required>
						</td>

						<td>
							<label for="val_cnh">Validade da CNH</label>
							<input type="text" name="val_cnh" id="val_cnh" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="cnh">Foto da CNH</label>
							<input type="file" name="cnh" id="cnh" required>
						</td>

						<td>
							<label for="num_permissao">N° da Permissão</label>
							<input type="text" name="num_permissao" id="num_permissao" required>
						</td>

						<td>
							<label for="permissao">Permissão</label>
							<input type="file" name="permissao" id="permissao" required>
						</td>
					</tr>

					<tr>
						<td>
							<h3>Dados do Veículo</h3>
						</td>
					</tr>

					<tr>
						<td>
							<label for="marca_veiculo">Marca</label>
							<select name="marca_veiculo" id="marca_veiculo" required>
								<option value=""></option>
								<option value="Agrale">Agrale</option>
								<option value="Aston Martin">Aston Martin</option>
								<option value="Audi">Audi</option>
								<option value="Bentley">Bentley</option>
								<option value="BMW">BMW</option>
								<option value="BYD">BYD</option>
								<option value="CAOA Chery">CAOA Chery</option>
								<option value="Changan">Changan</option>
								<option value="Chevrolet">Chevrolet</option>
								<option value="Chrysler">Chrysler</option>
								<option value="Citroën">Citroën</option>
								<option value="Dodge">Dodge</option>
								<option value="Dongfeng">Dongfeng</option>
								<option value="Effa">Effa</option>
								<option value="Ferrari">Ferrari</option>
								<option value="Fiat">Fiat</option>
								<option value="Ford">Ford</option>
								<option value="Foton">Foton</option>
								<option value="Geely">Geely</option>
								<option value="Hafei">Hafei</option>
								<option value="Honda">Honda</option>
								<option value="Hyundai">Hyundai</option>
								<option value="Iveco">Iveco</option>
								<option value="JAC">JAC</option>
								<option value="Jaguar">Jaguar</option>
								<option value="Jeep">Jeep</option>
								<option value="Jinbei">Jinbei</option>
								<option value="Kia">Kia</option>
								<option value="Lamborghini">Lamborghini</option>
								<option value="Land Rover">Land Rover</option>
								<option value="Lexus">Lexus</option>
								<option value="Lifan">Lifan</option>
								<option value="Maserati">Maserati</option>
								<option value="Mercedes-AMG">Mercedes-AMG</option>
								<option value="Mercedes-Benz">Mercedes-Benz</option>
								<option value="Mini">Mini</option>
								<option value="Mitsubishi">Mitsubishi</option>
								<option value="Nissan">Nissan</option>
								<option value="Peugeot">Peugeot</option>
								<option value="Porsche">Porsche</option>
								<option value="Rely">Rely</option>
								<option value="Renault">Renault</option>
								<option value="Shineray">Shineray</option>
								<option value="Smart">Smart</option>
								<option value="SsangYong">SsangYong</option>
								<option value="Subaru">Subaru</option>
								<option value="Suzuki">Suzuki</option>
								<option value="TAC">TAC</option>
								<option value="Troller">Troller</option>
								<option value="Toyota">Toyota</option>
								<option value="Volkswagen">Volkswagen</option>
								<option value="Volvo">Volvo</option>
							</select>
						</td>

						<td>
							<label for="modelo_veiculo">Modelo</label>
							<input type="text" name="modelo_veiculo" id="modelo_veiculo" required>
						</td>

						<td>
							<label for="ano_fabricacao_veiculo">Ano de Fabricação</label>
							<input type="number" name="ano_fabricacao_veiculo" id="ano_fabricacao_veiculo" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="ano_modelo_veiculo">Ano do Modelo</label>
							<input type="number" name="ano_modelo_veiculo" id="ano_modelo_veiculo" required>
						</td>

						<td>
							<label for="assentos_veiculo">Quantidade de Assentos</label>
							<input type="number" name="assentos_veiculo" id="assentos_veiculo" required>
						</td>

						<td>
							<label for="documentos_crlv">Foto do Documento</label>
							<input type="file" name="documentos_crlv" id="documentos_crlv" required>
						</td>
					</tr>

					<tr>
						<td>
							<h3>Dados de Acesso</h3>
						</td>
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
							<label for="repetirSenha">Repita a Senha</label>
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