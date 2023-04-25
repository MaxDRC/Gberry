@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/home.css', 'resources/css/caroussel.css' , 'resources/js/app.js', 'resources/js/caroussel.js'])

<h1> GoodBerry </h1>
  
    <div class="carousel relative">
      <div class="carousel-inner">
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/berrysunday.jpg" class="object-cover object-center w-full h-full" alt="Berry Sunday">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/photo2.jpg" class="object-cover object-center w-full h-full" alt="Festival 1">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/photo3.jpg" class="object-cover object-center w-full h-full" alt="Festival 2">
            </div>
      </div>
      <div class="carousel-nav absolute inset-y-0 right-0 flex items-center justify-center">
            <button class="carousel-control carousel-control-prev mr-2">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-control carousel-control-next">
              <i class="fas fa-chevron-right"></i>
            </button>
      </div>
    </div>
    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/berrysunday.jpg" class="photo" alt="Berry Sunday">
            </div>
            <div class="carousel-item">
                <img src="img/photo2.jpg" class="photo" alt="Festival 1">
            </div>
            <div class="carousel-item">
                <img src="img/photo3.jpg" class="photo" alt="Festival 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Prec.</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suiv.</span>
        </button>
    </div> -->
      
      
    <h2>GoodBerry kézako ?</h2>
        <p>Initiée par la jeunesse berruyère dans le but de proposer une offre culturelle intergénérationnelle, GOOD BERRY a pour vocation d’organiser des évènements musicaux à Bourges en plaçant la volonté du 100% local au centre de son dispositif. 

Après le franc succès des "Berry Sunday" organisés durant l'été 2021, GOOD BERRY entame à présent sa saison hivernale avec l'organisation de plusieurs concerts ou de manifestations culturelles en salle à Bourges.

Si vous partagez nos valeurs ou que vous souhaitez nous soutenir dans notre développement, devenez adhérents de l'association via cette page HelloAsso.

Les adhérents pourront bien évidemment profiter de certains avantages lors de l'organisation des évènements culturels.

Bienvenue chez GOOD BERRY !</p>
@endsection