@extends('layouts.layout')
@section('abacaxi')
  <div class="container-fluid text-white">
    <h1>Cardápio</h1>
    <div class="d-flex justify-content-start"><a href="{{route('menu.create')}}" class="btn btn-primary">Criar novo Cardápio</a></div>

    <table class="table bg-light">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Foto</th>
          <th scope="col">Descrição</th>
          <th scope="col">Ativo ou Não</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>
          <th scope="col">Visualizar</th>

        </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
        <tr>
          <th scope="row">{{ $menu->id}}</th>
          <td>{{$menu->name}}</td>
          <td><img src="{{asset('/storage/'. $menu->image_path)}}" width="150" height="150"></td>
          <td>{{$menu->description}}</td>
          <td>{{$menu->is_active}}</td>

            <td><a href="{{route('menu.edit', $menu->id)}}" class="btn btn-primary">

            ✏️
          </a></td>

           <td><form action="{{route('menu.destroy', $menu->id)}}" method="post">
             @csrf
             @method('delete')
             <button type="submit" class="btn btn-danger">

             🗑️
             </button>
           </form>
         </td>
         <td><a href="{{route('menu.show', $menu->id)}}" class="btn btn-primary"> 👀 </a></td>

        </tr>
        @endforeach
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
@endsection
