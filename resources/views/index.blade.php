@extends('templates.template')

@section('title','Home')

@section('header')
<div class="nav">
	<ul>
		<li><a href="/noticias/cadastro">Cadastrar notícia</a></li>
    <li><a href="/register">Entrar</a></li>
	</ul>
</div>
@section('content')
@foreach ($noticias as $noticia)
<div id="noticiaBloco">
	<div class='noticiaBloco'>
		<img class='banner' src='/img/noticias/{{$noticia->Imagem}}' alt="{{$noticia->Titulo}}"/>
		<div class="texto">
			<a href="/noticias/{{$noticia->ID}}">
				{{$noticia->Titulo}}
				<br><p class="noticia">{{$noticia->Texto}}</p>
        <h3>{{$noticia->ID_Usuario}}</h3>
			</a>
		</div>
	</div>
</div>
@endforeach

@endsection
@endsection