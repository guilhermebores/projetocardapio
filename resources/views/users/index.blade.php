@extends('layouts.layout')
@section('abacaxi')
  <div class="container-fluid text-white">
    <h1>Funcionários</h1>
    <div class="d-flex justify-content-start"><a href="{{route('User.create')}}" class="btn btn-primary">Criar novo funcionario</a></div>

    <table class="table bg-light">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Login</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>

        </tr>
      </thead>
      <tbody>
        @foreach($Users as $User)
        <tr>
          <th scope="row">{{ $User->id}}</th>
          <td>{{$User->name}}</td>
          <td>{{$User->cpf}}</td>
          <td>{{$User->address}}</td>
          <td>{{$User->phone}}</td>
          <td>{{$User->email}}</td>


            <td><a href="{{route('User.edit', $User->id)}}" class="btn btn-primary">

            ✏️
          </a></td>

           <td><form action="{{route('User.destroy', $User->id)}}" method="post">
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
