@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/partenaires.css', 'resources/js/app.js'])
<div id="titles">
  <h1>Partenaires</h1>
</div>
<h2>Retrouvez les sites de nos partenaires</h2>
<div id="logobar">
  <div class="logos">
    <a href="https://www.facebook.com/people/Madinina-Cocktails/100054197874867/">
      <img src="img/part/madinlogo.png" alt="Madinina">
    </a>
    <a href="http://idkub.com/">
      <img src="img/part/IDKUBlogo.png" alt="IDKUB">
    </a>
    <a href="https://www.brasserie-bos.fr/">
      <img src="img/part/brasboslogo.png" alt="Brasserie Bos">
    </a>
    <a href="https://www.facebook.com/profile.php?id=100062748132798">
      <img src="img/part/birdielogo.jpg" alt="Birdie">
    </a>
    <a href="https://www.cueillette-de-bourgneuf.fr/">
      <img src="img/part/logo-bourgneuf.png" alt="Cueuillette Bourgneuf">
    </a>
    <a href="https://www.arliane-bourges.fr/">
      <img src="img/part/arlianelogo.png" alt="Arliane">
    </a>
    <a href="https://www.facebook.com/Pacoprintfr/">
      <img src="img/part/pacologo.png" alt="Paco Print">
    </a>
    <a href="https://www.soundb.fr/">
      <img src="img/part/logosoundb.png" alt="Sound B">
    </a>
  </div>
</div>

<div class="main_form">
  <h2>Demande de partenariat</h2>
</div>
<div class="container_form">
  <div class="content_form">
    <p>Si vous souhaitez devenir partenaire de GoodBerry, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>
    <div id="form"class="content_form">
      <form>
        <label for="fname">Entreprise</label>
        <input type="text" id="fname" name="firstname" placeholder="Qui-êtes-vous..? " class="form-input">
        <label for="lname">Nom</label>
        <input type="text" id="lname" name="lastname" placeholder="Nom du contact.." class="form-input">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email.." class="form-input">
        <label for="subject">Sujet</label>
        <textarea id="subject" name="subject" placeholder="Je veux devenir partenaire.." style="height:200px" class="form-input"></textarea>
        <input type="submit" value="Envoyer" class="submit-button">
      </form>
    </div>
  </div>
</div>
    
    
@endsection