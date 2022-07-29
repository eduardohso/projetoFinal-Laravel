@extends('templates.template')
@section('title','Editar Notícia')
@section('content')
  <div class="nav">
    <ul>
      <li><a href="/">Home</a></li>
   </ul>
  </div>
  <div class="container">
      <form method="POST" enctype="multipart/form-data">
          <label for="titulo">Título:</label>
          <!-- class="inputError" para erros -->
          <input type="text" id="inputTitulo" name="inputTitulo" placeholder="Título da notícia">

          <label for="noticia">Texto:</label>
          <textarea id="inputNoticia" name="inputNoticia" placeholder="Texto da notícia"></textarea>
          
          <label for="imagem">Imagem:<br><h4>Apenas uma imagem por notícia</h4></label>
          <!-- class="fileInputError" para erros -->
          <!-- class="fileInput" padrao -->
          <input type="file" accept="image/*" name="inputImagem" id="inputImagem" class="fileInput">
          <label for="imagem" id="labelFileInput">Escolha um arquivo</label>
          
          <label ></label>
          <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
    </div>
  </div>
@endsection