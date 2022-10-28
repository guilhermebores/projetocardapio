@extends('layouts.layout')
@section('abacaxi')
<div class="d-flex justify-content-center text-white"><h1>Detalhes do Cardápio</h1></div>
  <div class="d-flex justify-content-center text-white">
<ul class="list-group-flush">
  <li class="list-group-item"><b>Nome</b> {{$menu->name}}</li>
  <li class="list-group-item"><b>descrição</b> {{$menu->description}}</li>
  <li class="list-group-item"><b>disponibilidade</b> {{$menu->is_active}}</li>


 </ul>
</div>
<div class="d-flex justify-content-center">
<a href="{{route('menu.edit', $menu->id)}}" class="btn btn-primary">Editar</a>
<a href="{{route('menu.index')}}" class="btn btn-secondary">Voltar</a>
</div>
<br>
<div class="d-flex justify-content-center text-white gap-5">
  <h5>link compartilhável</h5>
<img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl={{urlencode(route('menu.public.show', $menu->id))}}" >
 <a href="{{route('menu.public.show', $menu->id)}}">{{route('menu.public.show', $menu->id)}}</a>
 </div>
    <div class="container">
<div class="d-flex justify-content-center w-100">

      <form class="d-flex flex-row" action="{{route('menu.product.store', $menu->id) }}" method="post">
         @csrf
        <div class="mb-3 d-flex flex-row gap-3 text-white">
          <div>
            <label for="selectproducts">Adicionar produtos:</label>
            <select id="selectproducts" class="form-select" name="product_id">
              @foreach($addableProducts as $product)
                   <option value="{{$product->id}}">{{$product->name}}</option>
              @endforeach
            </select>
          </div>

         <div class="d-flex align-items-end">
      <button type="submit" class="btn btn-primary" name="button">
        <i>Adicionar</i>
      </button>
      </form>
</div>
</div>
<div class="d-flex justify-content-center w-100">

<table class="table table-light">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>

    </tr>
  </thead>
<tbody>
   @foreach($menu->products as $product)
   <tr>
      <td><a target="_blank" href="{{route('product.show', $product->id)}}">{{$product->name}}</a></td>
      <td>{{$product->description}}</td>
      <td>{{$product->price_cents/100}}</td>
      <td>{{$product->it_available ? 'Disponível' : 'Indisponível'}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <form action="{{route('menu.product.destroy', [$menu->id, $product->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger " title="Remover">
              <i class="bi bi-trash"></i>
            </button>
          <form>
        </div>
      </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>

@endsection
