<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link  rel="stylesheet"  href=" {{asset('css/app.css')}} ">
</head>
<body>

<div class="container">

<h1>Magasin</h1>

{{-- tableau --}}

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>

      </tr>
    </thead>
    <tbody>

        @foreach ($produit as $item)
            
        
        <tr>
            <th scope="row">{{$item->id}} </th>
            <td> {{$item->nom}} </td>
            <td>
                <a class="btn btn-success" href="/produit-show/{{$item->id}}">show more</a>
            </td>
        </tr>

        
        
        @endforeach

    </tbody>
  </table>

  {{-- form --}}



    





</div>
<script  src="{{asset('js/app.js')}}"  ></script>
</body>
</html>