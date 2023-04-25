@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/partenaires.css', 'resources/js/app.js', 'resources/js/caroussel.js'])
    <h1>Partenaires</h1>
    <div class="carousel relative">
      <div class="carousel-inner">
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/idkub.jpg" class="object-cover object-center w-full h-full" alt="Berry Sunday">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/madinina1.jpg" class="object-cover object-center w-full h-full" alt="Festival 1">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/brasbos.jpg" class="object-cover object-center w-full h-full" alt="Festival 2">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/bourgneuf.jpg" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/birdie.jpg" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/Arliane.png" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/berrycola.jpg" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/paco.jpg" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
            <div class="carousel-item absolute inset-0 bg-gray-100">
              <img src="img/part/soundb.jpg" class="object-cover object-center w-full h-full" alt="Festival 3">
            </div>
      </div>
      <!-- <div class="carousel-nav absolute inset-y-0 right-0 flex items-center justify-center">
            <button class="carousel-control carousel-control-prev mr-2">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-control carousel-control-next">
              <i class="fas fa-chevron-right"></i>
            </button>
      </div> -->
    </div>
    <br>
    <h2>Demande de partenariat</h2>
    <p>
        Si vous souhaitez devenir partenaire de GoodBerry, n'hésitez pas à nous contacter via le formulaire ci-dessous.
    </p>
    <form>
        <label for="fname">Nom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom..">
        <label for="lname">Prénom</label>
        <input type="text" id="lname" name="lastname" placeholder="Votre prénom..">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email..">
        <label for="subject">Sujet</label>
        <textarea id="subject" name="subject" placeholder="Votre message.." style="height:200px"></textarea>
        <input type="submit" value="Envoyer">
    </form>
    
    
@endsection