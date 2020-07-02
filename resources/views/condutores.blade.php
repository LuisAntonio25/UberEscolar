@extends('templates/template')

@section('content')

<main class="condutores">
	<div class="list">
		@foreach ($condutor as $value)
			<a href="#" class="condutor">
				<div >
					<h3>{{ $value->nome }}</h3>
					<p class="endereco">{{ $value->estado }} - {{ $value->cep }}</p>
					<p class="veiculo">{{ $value->marca_veiculo }} - {{ $value->modelo_veiculo }} {{ $value->ano_modelo_veiculo }} ({{ $value->assentos_veiculo }} Lugares)</p>
				</div>
			</a>
		@endforeach
	</div>
</main>

@endsection