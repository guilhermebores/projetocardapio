@extends('layouts.layout')
@section('abacaxi')
<div class="d-flex justify-content-center text-white"><h1>Detalhes do Produto</h1></div>
  <div class="d-flex justify-content-center text-white">
<ul class="list-group-flush">
  <li class="list-group-item"><b>Nome</b> {{$product->name}}</li>
  <li class="list-group-item"><b>descrição</b> {{$product->description}}</li>
  <li class="list-group-item"><b>preço</b> {{$product->price_cents}}</li>
  <li class="list-group-item"><b>disponibilidade</b> {{$product->it_available}}</li>


 </ul>
</div>
<div class="d-flex justify-content-center">
<a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Editar</a>
<a href="{{route('product.index')}}" class="btn btn-secondary">Voltar</a>
</div>
 @endsection
