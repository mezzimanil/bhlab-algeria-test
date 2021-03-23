@extends('layouts.app')
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
@section('content')

<body>
    <div style="background: url({{ asset('image/sombre.jpg') }})" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">Notre service après-vente
                est à votre disposition 7 jours / 7</h1>
           
         
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
      <h2>* Service Aprés-vente</h2>
      <p>Nos équipes sont toujours mobilisées pour garantir la meilleure prestation d’assistance, dans les meilleurs délais.</p>
      <p>Notre service après-vente est disponible 7j/7j :</p>
      <p><i class="bi bi-telephone-forward">Téléphone:+213 21 85 52 00 </i></p>
      <p><i class="bi bi-envelope">E-mail: info.bhlab@bhinvest.net</i></p>
        </div>

        <div class="col-md-5">
            <div class="size37"> <img src="{{ asset('image/l2.png') }}" alt="" width="600" height="600"></div>

        </div>
    </div>
    <div class="row justify-content-center">
        <h2>* Service Aprés-vente</h2>
        <p>Nos équipes sont toujours mobilisées pour garantir la meilleure prestation d’assistance, dans les meilleurs délais.</p>
        <p>Notre service après-vente est disponible 7j/7j :</p>
        <p><i class="bi bi-telephone-forward">Téléphone:+213 21 85 52 00 </i></p>
        <p><i class="bi bi-envelope">E-mail: info.bhlab@bhinvest.net</i></p>
          </div>
</body>
@endsection
</html>