@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/partenaires.css', 'resources/js/app.js', 'resources/js/caroussel.js'])
    <h1>Partenaires</h1>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/part/idkub.jpg" class="photo" alt="idkub1">
                </div>
                <div class="carousel-item">
                    <img src="img/part/idkub2.jpg" class="photo" alt="idkub 2">
                </div>
                <div class="carousel-item">
                    <img src="img/part/madinina1.jpg" class="photo" alt="madinina 1">
                </div>
                <div class="carousel-item">
                    <img src="img/part/madinina2.jpg" class="photo" alt="madinina 2">
                </div>
                <div class="carousel-item">
                    <img src="img/part/brasbos.jpg" class="photo" alt="brasbos">
                </div>
                <div class="carousel-item">
                    <img src="img/part/bourgneuf.jpg" class="photo" alt="bourgneuf">
                </div>
                <div class="carousel-item">
                    <img src="img/part/birdie.jpg" class="photo" alt="birdie">
                </div>
                <div class="carousel-item">
                    <img src="img/part/Arliane.png" class="photo" alt="Arliane">
                </div>
                <div class="carousel-item">
                    <img src="img/part/berrycola.jpg" class="photo" alt="berrycola">
                </div>
                <div class="carousel-item">
                    <img src="img/part/paco.jpg" class="photo" alt="paco">
                </div>
                <div class="carousel-item">
                    <img src="img/part/soundb.jpg" class="photo" alt="soundb">
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