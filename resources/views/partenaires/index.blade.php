@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <h1>Partenaires</h1>
    <img class="photo" src="img/berrysunday.jpg" alt="berrysunday" style="width: 75%; heigth: 100%; item-align: center;">
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