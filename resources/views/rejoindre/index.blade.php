@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/rejoindre.css', 'resources/js/app.js'])
<section>
    <div class="main_bureau">
        <h1>Le bureau GoodBerry </h1>
    </div>
    <div class="container_bureau">
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/pinch.webp" alt="quentin">
                <h2>Jeremy Pinchot</h2>
                <p>Président</p>
            </div>
        </div>
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/juju.webp" alt="alexandre">
                <h2>Julien Thiant</h2>
                <p>Vice-Président</p>
            </div>
        </div>
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/guigui.webp" alt="romain">
                <h2>Guillaume David</h2>
                <p>Trésorier</p>
            </div>
        </div>
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/tom.webp" alt="romain">
                <h2>Tom Dautry</h2>
                <p>Secrétaire</p>
            </div>
        </div>
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/mika.webp" alt="romain">
                <h2>Michael Mesic</h2>
                <p>Secrétaire</p>
            </div>
        </div>
        <div class="box_bureau">
            <div class="content_bureau">
                <img class="photo_bureau" src="img/val.webp" alt="romain">
                <h2>Valentin Mathiault</h2>
                <p>Secrétaire</p>
            </div>
        </div>

    </div>

</section>
<section>
    <div class="main">
        <h1>Intègre la Good Team 
            <div class="roller">
                <span id="rolltext">
                    Adhérent
                    <br/>
                    ou 
                    <br/>
                    Bénévole
                    <br/>
                <span id="spare-time"> Rejoins-nous</span><br/>
          </div>
        </h1>
    </div>
    <div class="container">
        <div class="box">
            <div class="content">
                <h2>Adhérents</h2>
                <p>Si vous partagez nos valeurs ou que vous souhaitez nous soutenir, devenez adhérents de l'association via le formulaire d'inscription.</p>
                <a>Devenir Adhérent</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h2>Bénévoles</h2>
                <p>Si vous souhaitez nous aider à organiser nos évènements, vous pouvez nous contacter via le formulaire de contact ci-dessous.</p>
                <a href="#form">Devenir Bénévole</a>
            </div>
        </div>
        <div class="content">
            <img class="photo" src="img/benevoles.webp" alt="benevoles">
        </div>
        <div class="content">
            <img class="photo" src="img/benevoles2.webp" alt="benevoles2">
        </div>
    </div>
</section>

<section>
    <div class="main_form">
        <h1>Formulaire de contact</h1>
    </div>
    <div class="container_form">
        <div class="content_form">
            <h2>Comme on est heureux chez Good Berry</h2>
            <img class="photo" src="img/goodteam.webp" alt="contact">
        </div>
        <div id="form"class="content_form">
            <form>
                <label for="fname">Nom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre nom.." class="form-input">

                <label for="lname">Prénom</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre prénom.." class="form-input">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email.." class="form-input">

                <label for="subject">Motivation</label>
                <textarea id="subject" name="subject" placeholder="Je veux devenir bénévole car.." style="height:200px" class="form-input"></textarea>

                <input type="submit" value="Envoyer" class="submit-button">
            </form>
        </div>
        
    </div>
</section>
@endsection