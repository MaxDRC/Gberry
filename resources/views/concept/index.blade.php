@extends('layouts.layouthf')

@section('content')
<title>Berry Sunday</title>
@vite(['resources/css/concept.css', 'resources/js/app.js', 'resources/js/concept.js'])
<div id="main">
    <h1>Berry Sunday, c'est quoi ?</h1>
    <div class="roller">
        <span id="rolltext">
            GoodBerry entre en scène ! 
            <br/>
             Pour faire bouger ton dimanche !
             <br>
            <span id="spare-time">Viens vivre l'expérience #BerrySunday</span><br/>
        </span>
    </div>
</div>
<div id="berry_sunday">
  <div id="details">
    <div class="grid-container">
      <div>
        <h2>Au programme :</h2>
      </div>
      <div id="imgtxt">
        <img id="BS5"src="img/7.webp" alt="BS">
        <p>
          ¤ Dj set (house, techno, electro, etc...)
          <br>
          ¤ Une buvette de boissons fraîches proposées par nos partenaires locaux
          <br>
          ¤ (La brasserie Bos, Madinina Cocktails)
          <br>
          ¤ Un stand de boissons chaudes (Wellca Coffee)
          <br>
          ¤ Un stand Snack (sandwichs et frites)
          <br>
          ¤ Un stand de vente de vêtements et accessoires GoodBerry
          <br>
          ¤ Un stand de maquillage (pour être au top de la fête !)
          <br>
          En bref, une ambiance festive et conviviale pour passer un bon moment entre amis !
        </p>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="text">
      <div>
        <h2>Notre Berry Sunday à la cathédrale de Bourges</h2>
      </div>
      <div>
        <input type="checkbox" id="open" hidden>
        <label for="open" class="button">Voir la vidéo</label>
      </div>
    </div>
    <div class="grid-container">
      <div>
        <div class="video">
          <video src="videos/GB.mp4" loop="loop" controls muted playsinline="playsinline" poster="../img/vignettes.jpg"></video>
        </div>
      </div>
      <div>
        <div></div>
      </div>
    </div>
  </div>
</div>

@endsection