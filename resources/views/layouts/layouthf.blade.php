<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="header_footer.css"> -->

        @yield('css')
        <title>Document</title>
        <!-- Scripts -->
        @vite(['resources/css/header_footer.css', 'resources/js/app.js'])

    </head>
    <body>
        <header>
                <img
                    class="logo"
                    src="{{ asset('logo.png') }}"
                    alt="Logo"
                    style="width: 100px; height: 100px;
                    display: flex;">
            <nav>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{route('concept.index')}}">Berry Sunday</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{route('galerie.index')}}">Galerie Photos</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a>Rejoignez-nous</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a>Partenaires</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <div class="container"> 
            <nav>
                <ul>
                    <li>
                        <a href="mailto:maxime.deroche@live.fr">Contact</a>
                    </li>
                </ul>
            </nav>
                <nav>
                    <ul>
                        <li>
                            <a  href="https://www.facebook.com/AssoGoodBerry">
                                <img
                                    src="{{asset('img/facebook.png')}}"
                                    alt="Facebook"
                                    style="width: 50px; height: 50px;">
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/good_berry_asso/">
                                <img
                                    src="{{asset('img/instagram.png')}}"
                                    alt="Instagram"
                                    style="width: 50px; height: 50px;">
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <!--Ajouter une route vers la page de mention légales-->
                        <li>
                            <a>Mentions Légales</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <img
                        class="logo"
                        src="{{asset('logo.png')}}"
                        alt="Logo"
                        style="width: 100px; height: 100px; display: flex;">

        </footer>
        @vite([ 'resources/js/app.js'])
    </body>
</html>