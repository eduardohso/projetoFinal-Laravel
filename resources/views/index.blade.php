@extends('templates.template')

@section('title','Home')

@section('content')
<div class="nav">
  <ul>
    <li><a href="/noticias/cadastro">Cadastrar notícia</a></li>
    <li><a href="/register">Entrar</a></li>
 </ul>
</div>
<div id="noticiaBloco">
	<div class='noticiaBloco'>
		<img class='banner' src='img/img1.png'/>
		<div class="texto">
			<a href="/noticias/exibir">
				Lorem ipsum dolor sit amet consectetur.
				<br><p class="noticia">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolor delectus magni impedit accusamus fuga aliquid ab quam veritatis autem. Dolorum odio veritatis vel ab explicabo id aperiam culpa tempore? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi hic ipsa eligendi suscipit corrupti consequuntur quia. Vero, inventore? Consequuntur corrupti dolor assumenda explicabo nemo velit vitae doloremque ab, sint recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aspernatur rerum adipisci necessitatibus, commodi officia non quas mollitia, consectetur unde ipsum aperiam, ex debitis quod? Porro qui cum natus maxime.Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolor delectus magni impedit accusamus fuga aliquid ab quam veritatis autem. Dolorum odio veritatis vel ab explicabo id aperiam culpa tempore? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi hic ipsa eligendi suscipit corrupti consequuntur quia. Vero, inventore? Consequuntur corrupti dolor assumenda explicabo nemo velit vitae doloremque ab, sint recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aspernatur rerum adipisci necessitatibus, commodi officia non quas mollitia, consectetur unde ipsum aperiam, ex debitis quod? Porro qui cum natus maxime.Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolor delectus magni impedit accusamus fuga aliquid ab quam veritatis autem. Dolorum odio veritatis vel ab explicabo id aperiam culpa tempore? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi hic ipsa eligendi suscipit corrupti consequuntur quia. Vero, inventore? Consequuntur corrupti dolor assumenda explicabo nemo velit vitae doloremque ab, sint recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aspernatur rerum adipisci necessitatibus, commodi officia non quas mollitia, consectetur unde ipsum aperiam, ex debitis quod? Porro qui cum natus maxime.</p>
        <h3>Nome do autor</h3>
			</a>
		</div>
	</div>
		<div class='noticiaBloco'>
		<img class='banner' src='img/img2.png'/>
		<div class="texto">
			<a href=''>
				<br>Lorem ipsum dolor sit amet consectetur.
				<br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolor delectus magni impedit accusamus fuga aliquid ab quam veritatis autem. Dolorum odio veritatis vel ab explicabo id aperiam culpa tempore?</p>
			</a>
		</div>
		</div>
		<div class='noticiaBloco'>
		<img class='banner' src='img/img3.png'/>
		<div class="texto">
			<a href=''>
				<br>Lorem ipsum dolor sit amet consectetur.
				<br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolor delectus magni impedit accusamus fuga aliquid ab quam veritatis autem. Dolorum odio veritatis vel ab explicabo id aperiam culpa tempore?</p>
			</a>
		</div>
		</div>
</div>

@endsection