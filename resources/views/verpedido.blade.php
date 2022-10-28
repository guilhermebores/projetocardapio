@extends('layouts.layout')
@section('abacaxi')
  <div class="d-flex justify-content-center gap-2 text-white"><h1>Visualização Do Cardápio</h1></div>
  <div class="d-flex justify-content-center gap-2 text-white"><b>Nome:</b> Cardápio Principal</div>
  <div class="d-flex justify-content-center gap-2 text-white"><p>Criado em: 14/06/2022</p></div>
  <div class="d-flex justify-content-center gap-2 text-white"><p>Cardápio Ativo? sim</p></div>
  <div class="d-flex justify-content-center gap-2  text-white"><p>Ativar/Desativar</p><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked"></label></div>
  <div class="d-inline-flex gap-2 text-white">
  <div><label for="exampleName" class="form-label">Add Produtos:</label></div>
  <div><input type="Name" class="form-control" id="exampleName"></div>
  <button class="btn btn-primary" type="submit">+</button></div>
  </div>
  <table class="table bg-light">
  <thead>
    <tr>
      <th scope="col">Produto (Título)</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponibilidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> Café </td>
      <td> Café com Leite </td>
      <td>R$4.00</td>
      <td>Disponível</td>
    </tr>
    <tr>
      <td> Misto Quente </td>
      <td> Pão com Manteiga, queijo e Presunto </td>
      <td>R$8.00</td>
      <td>Disponível</td>
    </tr>
    <tr>
      <td> Pão com Ovo </td>
      <td> Pão, Ovo e Queijo </td>
      <td>R$6.00</td>
      <td>Disponível</td>
    </tr>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  @endsection
