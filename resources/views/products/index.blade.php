@extends('layouts.layout')
@section('abacaxi')
  <div class="container-fluid text-white">
    <h1>Produtos</h1>
    <div class="d-flex justify-content-start"><a href="{{route('product.create')}}" class="btn btn-primary">Criar novo Produto</a></div>

    <table class="table bg-light">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">produto</th>
          <th scope="col">Foto</th>
          <th scope="col">descrição</th>
          <th scope="col">preço</th>
          <th scope="col">disponibilidade</th>
          <th scope="col">Editar</th>
          <th scope="col">Remove</th>

        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{ $product->id}}</th>
          <td>{{$product->name}}</td>
          <td><img src="{{asset('/storage/'. $product->image_path)}}" width="180" height="180"></td>
          <td>{{$product->description}}</td>
          <td>{{$product->price_cents}}</td>
          <td>{{$product->it_available ? 'Disponível' : 'Indisponível'}}</td>



            <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">

            ✏️
          </a></td>

           <td><form action="{{route('product.destroy', $product->id)}}" method="post">
             @csrf
             @method('delete')
             <button type="submit" class="btn btn-danger">

             🗑️
             </button>
           </form>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
@endsection
