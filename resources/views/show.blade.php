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

<h1>Show More</h1>


<div class="container">

    <div class="card-body">
        <h5>Nom: {{$show->nom}} </h5>
        <h5>Quantite: {{$show->quantite}} pieces</h5>
        <img src="{{asset("img/".$show->img)}}" alt="">
    </div>







</div>

    





</div>
<script  src="{{asset('js/app.js')}}"  ></script>
</body>
</html>