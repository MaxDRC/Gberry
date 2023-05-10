@extends('layouts.layouthf')

@section('content')
<title>Berry Sunday</title>
@vite(['resources/css/concept.css', 'resources/js/app.js', 'resources/js/concept.js'])
<div id="berry_sunday">
    <div id="titles">
        <h1>Berry Sunday c'est quoi ?</h1>
        <br>
        <h2>GoodBerry entre en scène et viens faire bouger vos dimanches !!
            <br>
            Voici l'aftermovie de notre Berry Sunday à la cathédrale de Bourges
        </h2>
    </div>
    <video id="myVideo" controls  muted>
        <source src="videos/GB.mp4" type="video/mp4">
    </video>
</div>

<h3>Au programme : </h3>
<p>
     ¤ Dj set (house, techno, electro, etc...) ¤
    <br>
    ¤ Une buvette avec des boissons fraîches proposées par nos partenaires locaux (La brasserie Bos , Madinina Cocktails) ¤ 
     <br>
     ¤ et des boissons chaudes (Wellca Coffee) ¤
    <br>
    ¤ Un stand Snack (sandwichs et frites) ¤
    <br>
    ¤ Un stand de vente de vêtements et accessoires GoodBerry ¤
    <br>
    ¤ Un stand de maquillage (pour être au top de la fête !) ¤
    <br>
    En bref, une ambiance festive et conviviale pour passer un bon moment entre amis !
</p>
@endsection


