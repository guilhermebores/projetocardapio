@extends('layouts.layout')
@section('abacaxi')
<div class="d-flex justify-content-center text-white"><h1>Detalhes do Usuário</h1></div>
  <div class="d-flex justify-content-center text-white">
<ul class="list-group-flush">
  <li class="list-group-item">Nome {{$User->name}}</li>
  <li class="list-group-item">Email {{$User->email}}</li>
  <li class="list-group-item">Senha {{$User->password}}</li>
  <li class="list-group-item">CPF {{$User->cpf}}</li>
  <li class="list-group-item">Telefone {{$User->phone}}</li>
  <li class="list-group-item">Endereço {{$User->address}}</li>

 </ul>
</div>
<div class="d-flex justify-content-center gap-3">
<a href="{{route('User.edit', $User->id)}}" class="btn btn-primary">Editar</a>
<a href="{{route('User.index', $User->id)}}" class="btn btn-secondary">Voltar</a>
</div>
 @endsection
