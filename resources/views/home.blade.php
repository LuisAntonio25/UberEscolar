@extends('templates/template')

@section('content')
<main class="home">
    <div class="banner">
        <div class="image-container"></div>

        <div class="inner">
            <h2>Transportamos sua criança</h2>
            <p>Contrate agora um condutor e não se preocupe mais com os horários</p>
            <a href="{{ route('condutores') }}">Nossos Condutores</a>
        </div>
    </div>

    <div class="block1">
    	<div class="titulo">
    		<h2>O que<br> nós fazemos</h2>
    	</div>

    	<div class="descricao">
    		<div class="item">
                <h3>Transportamos as Crianças</h3>
                <p>Buscamos e levamos as crianças da sua residência até as escolas, permitindo comodidade aos pais.</p>
            </div>

            <div class="item">
                <h3>Profissionais</h3>
                <p>Condutores altamente qualificados e verificados.</p>
            </div>

            <div class="item">
                <h3>Conforto</h3>
                <p>O transporte permite comodidade aos pais e conforto as crianças.</p>
            </div>
    	</div>
    </div>
</main>

@endsection