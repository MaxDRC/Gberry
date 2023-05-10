@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/home.css', 'resources/css/caroussel.css' , 'resources/js/app.js', 'resources/js/caroussel.js', 'resources/js/type_text.js'])
<div id="goodberry">
  <h1><span id="good">Good</span><span id="berry">Berry</span>
  </h1>
  <div id="slogan">Association loi 1901</div>
</div>
<div id="presentation">
  <h2 id="typed-text"></h2>
  <p>
    Initiée par la jeunesse berruyère dans le but de proposer une offre culturelle intergénérationnelle, GOOD BERRY a pour vocation d’organiser des évènements musicaux à Bourges en plaçant la volonté du 100% local au centre de son dispositif. 
  <br>
    Après le franc succès des "Berry Sunday" organisés durant les étés 2021 et 2022, <br> GOOD BERRY entame à présent sa troisième saison avec de nombreuses surprises et nouveautés.
  <br>
    Si vous partagez nos valeurs ou que vous souhaitez nous soutenir dans notre développement, devenez adhérents de l'association via le formulaire d'adhésion disponible sur la page rejoignez-nous.
  <br>
    Les adhérents pourront bien évidemment profiter de certains avantages lors de l'organisation des évènements culturels ainsi que se créer un portefeuille pour les évènements.
  <br>
    Bienvenue chez GOOD BERRY !
  </p>
</div>

@endsection