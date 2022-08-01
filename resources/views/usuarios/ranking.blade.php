@extends('templates.template')
@section('title','Ranking de usuarios')
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
      <th>Nome</th>
      <th>Email</th>
      <th>Pontos</th>
    </tr>
    @foreach ($users as $user)
      <tr> 
        <td>{{ $user->id}}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->points}}</td>
      </tr>
    @endforeach
  </table>
  {{ $users->links() }}
</div>
@endsection