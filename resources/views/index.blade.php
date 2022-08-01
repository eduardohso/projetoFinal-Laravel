@extends('templates.template')

@section('title','Home')

@section('header')
<div class="nav">
	<ul>
		<li><a href="/noticias/cadastro">Cadastrar notícia</a></li>
		@auth
		<li>
			<form action="/logout" method="POST">
				@csrf
				<a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
			</form>
		</li>
		@endauth
		@guest
    <li>
			<a href="/login">Entrar</a>
		</li>
    <li><a href="/register">Cadastrar</a></li>
		@endguest
	</ul>
</div>
@section('content')
@if(count($noticias)==0)
	<h2 class="semNoticias">Não há notícias cadastradas no sistema.</h2>
@endif
@foreach ($noticias as $noticia)
<div id="noticiaBloco">
	<div class='noticiaBloco'>
		<img class='banner' src='/img/noticias/{{$noticia->Imagem}}' alt="{{$noticia->Titulo}}"/>
		<div class="texto">
			<a href="/noticias/{{$noticia->ID}}">
				{{$noticia->Titulo}}
				<br><p class="noticia">{{$noticia->Texto}}</p>
			</a>
			.
		</div>
	</div>
</div>
@endforeach

@endsection
@endsection