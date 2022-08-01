@extends('templates.template')

@section('title',$noticia->Titulo)

@section('header')

<div class="nav">
  <ul>
    <li><a href="/">Home</a></li>
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
  <div class="container">
    <form action="/noticias/update/{{$noticia->ID}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <label for="titulo">Título:</label>
      <!-- class="inputError" para erros -->
      <input type="text" id="inputTitulo" name="Titulo" placeholder="Título da notícia" value="{{$noticia->Titulo}}">

      <label for="noticia">Texto:</label>
      <textarea id="inputNoticia" name="Texto" placeholder="Texto da notícia" >{{$noticia->Texto}}</textarea>
          
      <label for="imagem">Imagem:<br><h4>Apenas uma imagem por notícia</h4></label>
      <!-- class="fileInputError" para erros -->
      <!-- class="fileInput" padrao -->
      <input type="file" accept="image/*" name="Imagem" id="inputImagem" class="fileInput">

      <img  src="/img/noticias/{{$noticia->Imagem}}" alt="{{$noticia->Titulo}}" class="imagemPreview" >

      <label ></label>
      <input type="submit"  value="Enviar">
    </form>
  </div>
</div>
@endsection
@endsection