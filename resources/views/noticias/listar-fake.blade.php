@extends('templates.template')
@section('title','Lista Fake news')
@section('content')

<div class="nav">
    <ul>
      <li><a href="/">Home</a></li>
   </ul>
</div>
<div class="container">
  <table class="table">
    <tr>
      <th>Id</th>
      <th>Titulo</th>
      <th>Conteudo</th>
    </tr>
    @foreach ($noticias as $noticia)
      <tr> 
        <td>{{ $noticia->ID}}</td>
        <td>{{ $noticia->Titulo}}</td>
        <td>{{ $noticia->Texto}}</td>
      </tr>
    @endforeach
  </table>
</div>