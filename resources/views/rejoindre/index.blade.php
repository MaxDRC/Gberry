@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <h1>Rejoignez-nous</h1>
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