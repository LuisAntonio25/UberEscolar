@extends('templates/template')

@section('content')

<main class="cadastro">
	<div class="container">
		<h2>O que você é?</h2>

		<div class="items">
			<a href="{{ route('cadastro.cliente') }}" class="item item-1" title="Cliente">
				<div>
					<h3>Sou Cliente</h3>
					<p>Desejo contratar condutores para meu(s) filho(a)</p>
				</div>
			</a>

			<a href="{{ route('cadastro.condutor') }}" class="item item-2" title="Condutor">
				<div>
					<h3>Sou Condutor</h3>
					<p>Desejo transportar as crianças para a escola</p>
				</div>
			</a>
		</div>
	</div>
</main>

@endsection