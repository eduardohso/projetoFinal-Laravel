@extends('templates.template')

@section('content')
  <title>Editar Usuário</title>
  <div class="nav">
    <ul>
      <li><a href="/">Home</a></li>
   </ul>
  </div>
  <div class="container">
    <div class="cadUser">
      <form method="POST" enctype="multipart/form-data">
          <label for="nome">Nome:</label>
          <!-- class="cadUserInputError" para erros -->
          <!-- class="cadUser" padrao -->
          <input class="cadUser"type="text" id="inputNome" name="nome" placeholder="Insira seu nome">

          <label for="email">Email:</label>
          <input class="cadUser" type="email" id="inputEmail" name="email" placeholder="Insira seu email">
          
          <label for="usuario">Nome de usuário:</label>
          <input class="cadUser" type="text" id="inputUsuario" name="usuario" placeholder="Crie um nome de usuário">

          <label for="senha">Senha:</label>
          <input class="cadUser" type="password" id="inputSenha" name="senha" placeholder="Crie uma senha">
          
          <label ></label>
          <input class="cadUser" type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
    </div>
  </div>
@endsection