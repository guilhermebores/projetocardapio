@extends('layouts.layout')
@section('abacaxi')
  <div class="container-fluid text-white"><h1>Pedidos</h1></div>
  <div class="d-flex justify-content-start">
  <div><label for="exampleFormControlInput1" class="form-label text-white">Pedidos realizados no dia:</label></div>
  <div><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="            /                /            "></div>
  </div>
  <table class="table bg-light">
  <thead>
    <tr>
      <th scope="col">N°^</th>
      <th scope="col">Mesa</th>
      <th scope="col">Status</th>
      <th scope="col">Data</th>
      <th scope="col">Items</th>
      <th scope="col">Visualizar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>010</td>
      <td>Finalizado</td>
      <td>12/07/22</td>
      <td> Misto Quente e Café </td>
      <td><a class="btn btn-warning" href="" role="button">👀</a></td>
      <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>002</td>
      <td>Aberto</td>
      <td>12/07/22</td>
      <td>Nenhum</td>
      <td><a class="btn btn-warning" href="" role="button">👀</a></td>
      <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>015</td>
      <td>Em andamento</td>
      <td>13/07/22</td>
      <td> Pão com Ovo </td>
      <td><a class="btn btn-warning" href="" role="button">👀</a></td>
      <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
    </tr>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
@endsection
