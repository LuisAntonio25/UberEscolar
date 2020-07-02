@extends('templates/template')

@section('content')

<main class="login">
	<div class="form-container">
		<h2>Login</h2>

		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif

		<form action="{{ route('login.form') }}" method="POST">
			@csrf
			
			<label for="email">Seu Email</label>
			<input type="email" name="email" id="email" maxlength="191" required>

			<label for="senha">Sua Senha</label>
			<input type="password" name="senha" id="senha" maxlength="191" required>

			<button class="submit" type="submit">Entrar</button>

			<p class="cadastrar">Não tem conta? <a href="{{ route('cadastro.index') }}">Criar Conta</a></p>
		</form>
	</div>
</main>

@endsection