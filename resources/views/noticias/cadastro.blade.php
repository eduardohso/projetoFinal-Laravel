@extends('templates.template')
@section('title','Cadastrar Notícia')
@section('header')
<div class="nav">
  <ul>
    <li><a href="/">Home</a></li>
  </ul>
</div>
@section('content')
  <div class="container">
      <form method="POST" enctype="multipart/form-data" action="/noticias">
        @csrf
          <label for="titulo">Título:</label>
          <!-- class="inputError" para erros -->
          <input type="text" class="" id="inputTitulo" name="Titulo" placeholder="Título da notícia">

          <label for="noticia">Texto:</label>
          <textarea id="inputNoticia" name="Texto" placeholder="Texto da notícia"></textarea>
          
          <label for="imagem">Imagem:<br><h4>Apenas uma imagem por notícia</h4></label>
          <!-- class="fileInputError" para erros -->
          <!-- class="fileInput" padrao -->
          <input type="file" accept="image/*" name="Imagem" id="inputImagem" class="fileInput">
          
          <label ></label>
          <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
    </div>
  </div>
@endsection
@endsection