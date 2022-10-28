<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>restaurante</title>
  @vite(['resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="d-flex flex-column justify-content-center ">
  <div class="d-flex justify-content-center text-white ">
<h1>{{$menu->name}}</h1>
</div>
<div class="d-flex justify-content-center gap-4" >
@foreach($menu->products as $product)
<div class="card-group">

  <div class="card" style="width: 18rem;">
    <img src="{{asset('/storage/'.$product->image_path)}}" class="card-img-top" alt="">
    <div class="card-body">

   <h5 class="list-group-item">Nome: {{$product->name}}</h5>
   <h5 class="list-group-item">Descrição: {{$product->description}}</h5>
   <h5 class="list-group-item">Preço: {{$product->price_cents/100}}</h5>
   <h5 class="list-group-item">Disponibilidade: {{$product->it_available ? 'Disponível' : 'Indisponível'}}</h5>

 </ul>
    </div>
  </div>
</div>
@endforeach
</div>
</div>

</body>
<STYLE TYPE="text/css">
    BODY {background-image: url(https://images7.alphacoders.com/119/1191493.jpg); }
</STYLE>
</html>
