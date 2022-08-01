@extends('templates.template')

@section('title',$noticia->Titulo)

@section('header')
<div class="nav">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/noticias/cadastro">Cadastrar notícia</a></li>
    <li><a href="/noticias/editar">Editar notícia</a></li>
    <li><a href="/register">Entrar</a></li>
  </ul>
</div>
@section('content')

	<div class='noticiaCompleta'>
		<img class='banner' src='/img/noticias/{{$noticia->Imagem}}' alt="{{$noticia->Titulo}}"/>
		<div class="texto">
				<h1>{{$noticia->Titulo}}</h1>
				<br>
        <p>{{$noticia->Texto}}</p>
        <h3>{{$noticia->ID_Usuario}}</h3>
		</div>
@endsection
@endsection