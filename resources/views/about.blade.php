@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
</head>
@section('content')
<body>
    <div style="background: url({{ asset('image/white.jpg') }})" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">Présentation de BH-LAB</h1>
           
         
        </div>
    </div>
    <div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-6">
      <h2>* À-propos de BH-LAB :</h2>
<h4> Historique :
    <br>
    BH LAB est une entreprise organisée sous forme de société à responsabilité limitée, dont le capital social est de 700.000 000 DA.
    Elle a été créée en  2007 ,son fondateur est : BENHAMIDA Anas.
    <br>
    BH LAB est spécialisée dans l’importation, la mise en place, et la distribution de réactifs in vitro et d’automates  dédiés aux laboratoires d’analyses médicales.
    
</h4>
<h4>
Activités : 
<br>
BH LAB représente exclusivement différentes marques de renommée mondiale, tels que les laboratoires : Ortho Clinical Diagnostics, Werfen, Diasorin, Sacace Biotechnologies, Lagitre , Adaltis, Arkray , Entrogen, Merck, Binding Site et Horiba.
</h4>
<h4>
    La mission principale  que se donne BH LAB est la mise en place de solutions pour les laboratoires d’analyses médicales ( L.A.M), aussi bien dans le secteur privé que dans les hôpitaux ( CHU, EHS, secteurs sanitaires), d’en assurer un approvisionnement régulier en réactifs, ainsi qu’un service après- vente  de qualité, incluant un haut niveau de maintenance et une aide à l’application pour l’interprétation des résultats,  garantissant ainsi un bon fonctionnement des automates et donc des résultats d’une précision irréprochable.
</h4>
<h4>
    BH LAB accompagne les laboratoires et se veut partenaire avant d’être fournisseur. Pour cela elle offre différents types de solutions qui répondent aux différents besoins des laboratoires .
</h4>
        </div>
    </div>

        <div class="col-md-4">
            <div class="size37 mb-3"> <img src="{{ asset('image/l2.jpg') }}" alt="" width="450" height="430"></div>

        </div>
    </div>
</body>
@endsection
</html>