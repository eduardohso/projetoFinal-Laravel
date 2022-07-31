@extends('templates.template')

@section('title',$noticia->Titulo)

@section('header')
<div class="nav">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/noticias/cadastro">Cadastrar notícia</a></li>
    <li><a href="/noticias/editar/{{$noticia->id}}">Editar notícia</a></li>
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

	<div class='noticiaCompleta'>
		<img class='banner' src='/img/noticias/{{$noticia->Imagem}}' alt="{{$noticia->Titulo}}"/>
		<div class="texto">
				<h1>{{$noticia->Titulo}}</h1>
				<br>
        <p>{{$noticia->Texto}}</p>
        <h3>{{$autorNoticia['name']}}</h3>
		</div>
@endsection
@endsection