<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="header_footer.css"> -->

        @yield('css')
        
        <!-- Scripts -->
        
        @vite(['resources/css/header_footer.css', 'resources/js/app.js', 'resources/js/burger.js'])

    </head>
    <body>
        <header> 
                <nav class="menu-normal">
                    
                    <a href="">
                        
                        <svg width="67.908" height="100" version="1.1" viewBox="0 0 67.908 100" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                            <g transform="matrix(.25441 0 0 .25441 -29.48 -9.1409)">
                                <path d="m138.45 427.74c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.4637 4.1743 5.7384 7.6535 5.3039 14.477-0.26751 4.2013-1.0602 7.081-2.4893 9.0427l-2.0968 2.8784 2.0867 2.8224c2.9251 3.9564 3.4512 13.998 0.98283 18.759-2.9538 5.6979-7.4367 8.0199-15.483 8.0199-4.6235 0-7.0427-0.41483-7.3684-1.2635zm15.625-7.6596c2.3687-2.3687 2.9231-3.7805 2.9231-7.4442 0-5.9412-2.9177-9.3566-8.75-10.243l-4.25-0.64565v21.256h3.5769c2.6201 0 4.3588-0.78191 6.5-2.9231zm-0.15729-25.827c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm33.116 32.816c-1.3965-2.6093-1.3965-52.522 0-55.131 0.93018-1.738 2.1873-1.9343 12.393-1.9343 9.5667 0 11.456 0.25654 11.982 1.6268 1.2556 3.2719-1.2711 4.3732-10.033 4.3732h-8.3776v19.905l6.25 0.29771c5.9898 0.28532 6.2632 0.41221 6.5664 3.0477l0.31642 2.75h-13.133v21h8.3776c6.2268 0 8.6972 0.3851 9.6224 1.5 0.99319 1.1967 0.99319 1.8033 0 3-0.9665 1.1646-3.6696 1.5-12.087 1.5-9.6961 0-10.952-0.2045-11.878-1.9343zm48.444 0.7409c-0.28147-0.7335-0.39195-13.928-0.24552-29.32l0.26623-27.986 7.3092-0.295c5.9772-0.24125 7.9168 0.0805 10.644 1.7658 4.3726 2.7024 6.5473 7.512 6.5473 14.48 0 6.3918-1.7146 10.446-5.6213 13.292l-2.6773 1.9503 4.2715 12.114c4.4348 12.577 4.6038 15.563 0.85005 15.013-1.8219-0.26682-2.9654-2.4854-6.8656-13.32-3.7533-10.427-5.0535-13-6.5685-13-1.7293 0-1.9311 1.0981-2.3888 13-0.48284 12.554-0.57738 13.011-2.7545 13.32-1.24 0.17607-2.4848-0.28-2.7662-1.0135zm16.066-34.261c1.9632-1.9632 2.4546-3.4736 2.4546-7.5454 0-6.6731-2.9791-10-8.9546-10h-4.0454v20h4.0454c2.9618 0 4.7029-0.65747 6.5-2.4546zm32.907 34.191c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.0003 3.7409 5.4833 7.3153 5.4833 13.216 0 6.0831-2.2124 10.975-6.1298 13.553l-2.6298 1.7309 4.5142 12.33c4.0859 11.16 4.3665 12.478 2.9574 13.887-2.5732 2.5732-4.2303 0.87519-7.1931-7.3704-6.5819-18.318-6.5952-18.346-8.5907-18.346-1.7997 0-1.9282 0.81945-1.9282 12.3 0 12.285-0.61303 14.7-3.7314 14.7-0.73227 0-1.5496-0.56857-1.8162-1.2635zm15.467-33.486c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm42.789 34.126c-0.38987-0.38987-0.70087-6.8214-0.69111-14.292l0.01773-13.583-4.6897-13.581c-4.7466-13.746-5.0184-16.919-1.449-16.919 1.9316 0 3.4042 2.977 7.042 14.236 0.66392 2.0548 1.5863 3.9704 2.0498 4.2568 0.46345 0.28643 2.0657-3.1948 3.5606-7.7361 3.0584-9.2913 3.9394-10.757 6.4664-10.757 3.265 0 2.937 2.897-1.7818 15.735-4.6373 12.616-4.698 12.94-5.2128 27.765-0.49099 14.139-0.63797 15.017-2.562 15.292-1.1226 0.1607-2.3601-0.0268-2.75-0.41666zm-206.21-67.262c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908zm-105.73-60.571-36.773-46.112 13.812-60.879c8.5313-37.604 14.256-60.882 14.975-60.888 1.5424-0.01151 48.437 36.003 47.97 36.841-0.19927 0.35778-3.8717 15.664-8.1609 34.013-7.0345 30.094-7.6601 33.586-6.3852 35.647 0.77736 1.2564 9.8494 12.456 20.16 24.888l18.747 22.603h65.856l18.727-22.75c10.3-12.512 19.407-23.541 20.238-24.508 1.3636-1.5874 0.75045-4.9907-6.3059-35-4.299-18.283-8.0048-33.764-8.2351-34.402-0.23028-0.63813 9.4015-8.7774 21.404-18.087 23.181-17.981 25.944-19.964 26.726-19.182 0.83473 0.83473 27.716 120.08 27.396 121.53-0.16496 0.74673-16.642 21.842-36.615 46.878l-36.315 45.521h-120.45zm183.35-7.9149c17.875-22.518 32.5-41.511 32.5-42.207 0-3.0262-21.071-94.729-21.716-94.509-2.4468 0.8325-23.784 18.31-23.784 19.481 0 0.78894 3.4291 15.964 7.6202 33.722l7.6202 32.287-49.44 59.276-78.203-0.52303-24.298-29.355c-13.364-16.145-24.298-29.916-24.298-30.601 0-0.6855 3.375-15.481 7.5-32.879 4.125-17.398 7.5-32.029 7.5-32.512 0-0.9633-23.935-19.578-24.437-19.006-0.1705 0.19421-5.2339 21.728-11.252 47.853l-10.942 47.5 66.131 82.464 107-0.0496 32.5-40.941zm-121.97-43.437c-7.7159-9.6052-14.041-18.043-14.056-18.75-0.0147-0.70728 2.0993-10.7 4.6977-22.207l4.7244-20.921 40.622-19.659 40.742 19.405 5.0011 21.918 5.0011 21.918-28.938 35.76h-43.767zm57.971-4.7301c3.575-4.5044 8.0365-10.146 9.9144-12.537l3.4144-4.3474-6.6591-30.849-28.83-14.046-28.316 14.473-3.2158 13.5c-1.7687 7.425-3.2365 14.455-3.2618 15.623-0.0258 1.1906 4.0169 7.4268 9.204 14.198l9.25 12.075 32 0.0994 6.5-8.1899z" fill="#39b6fe"/>
                                <path d="m136.5 361.11c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908z" fill="#fe5757"/>
                            </g>
                        </svg>
                    </a>
                    <a href="/">Accueil</a>
                    <a href="{{route('concept.index')}}">Berry Sunday</a>
                    <a href="{{route('galerie.index')}}">Galerie Photos</a>
                    <a href="{{route('rejoindre.index')}}">Rejoignez-nous</a>
                    <a href="{{route('partenaires.index')}}">Partenaires</a>
                    @if (Route::has('login'))
                    <div class="connect">
                        @auth
                            <a href="{{ route('dashboard') }}">Tableau de bord</a>
                            <a href="{{ route('logout') }}"><img src="{{ asset('img/deco.png') }}" alt="Logo"></a>
                        @else
                            <a href="{{ route('login') }}">Connexion / Inscription </a>
                        @endauth
                    </div>
                    @endif
                </nav>
                <div class="menu-burger">
                    <button class="btn-menu-burger" data-toggle="menu-mobile">
                            <svg width="40" height="40" version="1.1" viewBox="0 0 6.35 6.35" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:osb="http://www.openswatchbook.org/uri/2009/osb" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                <g transform="translate(0 -290.65)" fill="none" stroke="#fe5757" stroke-linecap="round">
                                 <path d="m0.79375 296.21h4.7625" stroke-width="1.5875"/>
                                 <path d="m0.79375 291.44c1.6695 6e-3 3.3914 0.0154 4.7625 0" stroke-width="1.5875"/>
                                 <path d="m0.79375 293.82h4.7625" stroke-width="1.5875"/>
                                </g>
                            </svg>
                    </button>
                    <a href="/">
                        <svg width="67.908" height="100" version="1.1" viewBox="0 0 67.908 100" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                            <g transform="matrix(.25441 0 0 .25441 -29.48 -9.1409)">
                                <path d="m138.45 427.74c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.4637 4.1743 5.7384 7.6535 5.3039 14.477-0.26751 4.2013-1.0602 7.081-2.4893 9.0427l-2.0968 2.8784 2.0867 2.8224c2.9251 3.9564 3.4512 13.998 0.98283 18.759-2.9538 5.6979-7.4367 8.0199-15.483 8.0199-4.6235 0-7.0427-0.41483-7.3684-1.2635zm15.625-7.6596c2.3687-2.3687 2.9231-3.7805 2.9231-7.4442 0-5.9412-2.9177-9.3566-8.75-10.243l-4.25-0.64565v21.256h3.5769c2.6201 0 4.3588-0.78191 6.5-2.9231zm-0.15729-25.827c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm33.116 32.816c-1.3965-2.6093-1.3965-52.522 0-55.131 0.93018-1.738 2.1873-1.9343 12.393-1.9343 9.5667 0 11.456 0.25654 11.982 1.6268 1.2556 3.2719-1.2711 4.3732-10.033 4.3732h-8.3776v19.905l6.25 0.29771c5.9898 0.28532 6.2632 0.41221 6.5664 3.0477l0.31642 2.75h-13.133v21h8.3776c6.2268 0 8.6972 0.3851 9.6224 1.5 0.99319 1.1967 0.99319 1.8033 0 3-0.9665 1.1646-3.6696 1.5-12.087 1.5-9.6961 0-10.952-0.2045-11.878-1.9343zm48.444 0.7409c-0.28147-0.7335-0.39195-13.928-0.24552-29.32l0.26623-27.986 7.3092-0.295c5.9772-0.24125 7.9168 0.0805 10.644 1.7658 4.3726 2.7024 6.5473 7.512 6.5473 14.48 0 6.3918-1.7146 10.446-5.6213 13.292l-2.6773 1.9503 4.2715 12.114c4.4348 12.577 4.6038 15.563 0.85005 15.013-1.8219-0.26682-2.9654-2.4854-6.8656-13.32-3.7533-10.427-5.0535-13-6.5685-13-1.7293 0-1.9311 1.0981-2.3888 13-0.48284 12.554-0.57738 13.011-2.7545 13.32-1.24 0.17607-2.4848-0.28-2.7662-1.0135zm16.066-34.261c1.9632-1.9632 2.4546-3.4736 2.4546-7.5454 0-6.6731-2.9791-10-8.9546-10h-4.0454v20h4.0454c2.9618 0 4.7029-0.65747 6.5-2.4546zm32.907 34.191c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.0003 3.7409 5.4833 7.3153 5.4833 13.216 0 6.0831-2.2124 10.975-6.1298 13.553l-2.6298 1.7309 4.5142 12.33c4.0859 11.16 4.3665 12.478 2.9574 13.887-2.5732 2.5732-4.2303 0.87519-7.1931-7.3704-6.5819-18.318-6.5952-18.346-8.5907-18.346-1.7997 0-1.9282 0.81945-1.9282 12.3 0 12.285-0.61303 14.7-3.7314 14.7-0.73227 0-1.5496-0.56857-1.8162-1.2635zm15.467-33.486c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm42.789 34.126c-0.38987-0.38987-0.70087-6.8214-0.69111-14.292l0.01773-13.583-4.6897-13.581c-4.7466-13.746-5.0184-16.919-1.449-16.919 1.9316 0 3.4042 2.977 7.042 14.236 0.66392 2.0548 1.5863 3.9704 2.0498 4.2568 0.46345 0.28643 2.0657-3.1948 3.5606-7.7361 3.0584-9.2913 3.9394-10.757 6.4664-10.757 3.265 0 2.937 2.897-1.7818 15.735-4.6373 12.616-4.698 12.94-5.2128 27.765-0.49099 14.139-0.63797 15.017-2.562 15.292-1.1226 0.1607-2.3601-0.0268-2.75-0.41666zm-206.21-67.262c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908zm-105.73-60.571-36.773-46.112 13.812-60.879c8.5313-37.604 14.256-60.882 14.975-60.888 1.5424-0.01151 48.437 36.003 47.97 36.841-0.19927 0.35778-3.8717 15.664-8.1609 34.013-7.0345 30.094-7.6601 33.586-6.3852 35.647 0.77736 1.2564 9.8494 12.456 20.16 24.888l18.747 22.603h65.856l18.727-22.75c10.3-12.512 19.407-23.541 20.238-24.508 1.3636-1.5874 0.75045-4.9907-6.3059-35-4.299-18.283-8.0048-33.764-8.2351-34.402-0.23028-0.63813 9.4015-8.7774 21.404-18.087 23.181-17.981 25.944-19.964 26.726-19.182 0.83473 0.83473 27.716 120.08 27.396 121.53-0.16496 0.74673-16.642 21.842-36.615 46.878l-36.315 45.521h-120.45zm183.35-7.9149c17.875-22.518 32.5-41.511 32.5-42.207 0-3.0262-21.071-94.729-21.716-94.509-2.4468 0.8325-23.784 18.31-23.784 19.481 0 0.78894 3.4291 15.964 7.6202 33.722l7.6202 32.287-49.44 59.276-78.203-0.52303-24.298-29.355c-13.364-16.145-24.298-29.916-24.298-30.601 0-0.6855 3.375-15.481 7.5-32.879 4.125-17.398 7.5-32.029 7.5-32.512 0-0.9633-23.935-19.578-24.437-19.006-0.1705 0.19421-5.2339 21.728-11.252 47.853l-10.942 47.5 66.131 82.464 107-0.0496 32.5-40.941zm-121.97-43.437c-7.7159-9.6052-14.041-18.043-14.056-18.75-0.0147-0.70728 2.0993-10.7 4.6977-22.207l4.7244-20.921 40.622-19.659 40.742 19.405 5.0011 21.918 5.0011 21.918-28.938 35.76h-43.767zm57.971-4.7301c3.575-4.5044 8.0365-10.146 9.9144-12.537l3.4144-4.3474-6.6591-30.849-28.83-14.046-28.316 14.473-3.2158 13.5c-1.7687 7.425-3.2365 14.455-3.2618 15.623-0.0258 1.1906 4.0169 7.4268 9.204 14.198l9.25 12.075 32 0.0994 6.5-8.1899z" fill="#39b6fe"/>
                                <path d="m136.5 361.11c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908z" fill="#fe5757"/>
                            </g>
                        </svg>
                    </a>
                    
                
                    @if (Route::has('login'))
                    <div class="connect">
                        @auth
                            <a href="{{ route('dashboard') }}">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.1554 18.5659L18.087 18.4067C17.6996 17.3756 17.0535 16.6988 16.0488 16.2901C15.0618 15.8886 13.7385 15.75 12.0001 15.75C10.275 15.75 8.95912 15.8972 7.97442 16.3031C6.97373 16.7156 6.32558 17.3909 5.93304 18.4043L5.85652 18.5771C4.09876 16.9345 3 14.5956 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 14.5897 19.9062 16.9239 18.1554 18.5659ZM8.75 10C8.75 8.20507 10.2051 6.75 12 6.75C13.7949 6.75 15.25 8.20507 15.25 10C15.25 11.7949 13.7949 13.25 12 13.25C10.2051 13.25 8.75 11.7949 8.75 10Z" fill="#38b6ff"/>
                                    <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#38b6ff" stroke-width="2"/>
                                    <path d="M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" stroke="#38b6ff" stroke-width="2"/>
                                    <path d="M6.16406 18.5C6.90074 16.5912 8.56373 16 12.0001 16C15.4661 16 17.128 16.5578 17.855 18.5" stroke="#38b6ff" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </a>
                            <a href="{{ route('logout') }}">
                                <svg width="50px" height="50px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                                    <g fill="#ff5757">
                                        <path d="M1 8a6 6 0 018.514-5.45.75.75 0 01-.629 1.363 4.5 4.5 0 100 8.175.75.75 0 11.63 1.361A6 6 0 011 8z"/>
                                        <path d="M11.245 4.695a.75.75 0 00-.05 1.06l1.36 1.495H6.75a.75.75 0 000 1.5h5.805l-1.36 1.495a.75.75 0 001.11 1.01l2.5-2.75a.748.748 0 00-.002-1.012l-2.498-2.748a.75.75 0 00-1.06-.05z"/>
                                    </g>
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <svg fill="#38b6ff" width="50px" height="50px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <title>Connexion/Inscription</title>
                                    <path d="M2.016 28q0 0.832 0.576 1.44t1.408 0.576h14.016v-0.352q-1.792-0.608-2.912-2.176t-1.088-3.488q0-2.016 1.184-3.584t3.072-2.112q0.384-1.216 1.216-2.176t2.016-1.504q0.512-1.376 0.512-2.624v-1.984q0-3.328-2.368-5.664t-5.632-2.336-5.664 2.336-2.336 5.664v1.984q0 2.112 1.024 3.904t2.784 2.912q-1.504 0.544-2.912 1.504t-2.496 2.144-1.76 2.624-0.64 2.912zM18.016 24q0 0.832 0.576 1.44t1.408 0.576h2.016v1.984q0 0.864 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44v-1.984h1.984q0.832 0 1.408-0.576t0.608-1.44-0.608-1.408-1.408-0.576h-1.984v-2.016q0-0.832-0.608-1.408t-1.408-0.576-1.408 0.576-0.576 1.408v2.016h-2.016q-0.832 0-1.408 0.576t-0.576 1.408z"></path>
                                </svg>
                            </a>
                        @endauth
                    </div>
                    @endif
                </div>
                <nav class="menu-mobile">
                    <a href="/">Accueil</a>
                    <a href="{{route('concept.index')}}">Berry Sunday</a>
                    <a href="{{route('galerie.index')}}">Galerie Photos</a>
                    <a href="{{route('rejoindre.index')}}">Rejoignez-nous</a>
                    <a href="{{route('partenaires.index')}}">Partenaires</a>
                </nav>
                
        </header>
        @yield('content')
        <footer>
            <nav class="menu-normal-footer">

                <a href="mailto:maxime.deroche@live.fr">Contact</a>

                <a  href="https://www.facebook.com/AssoGoodBerry">
                    <svg width="100px" height="100px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="20" fill="#3B5998"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.315 16.9578C28.6917 16.8331 27.8498 16.74 27.3204 16.74C25.8867 16.74 25.7936 17.3633 25.7936 18.3607V20.1361H29.3774L29.065 23.8137H25.7936V35H21.3063V23.8137H19V20.1361H21.3063V17.8613C21.3063 14.7453 22.7708 13 26.4477 13C27.7252 13 28.6602 13.187 29.8753 13.4363L29.315 16.9578Z" fill="white"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/good_berry_asso/">
                    <img src="{{asset('img/instagram.png')}}" alt="Instagram" style="width: 50px; height: 50px;">
                </a>
                <a>Mentions Légales</a>
                <img class="logo" src="{{asset('logo.png')}}" alt="Logo" style="width: 100px; height: 100px; display: flex;">
            </nav>
            <nav class="menu-mobile-footer">

                <a href="mailto:maxime.deroche@live.fr">
                    <svg width="50px" height="50px" viewBox="0 0 48 48" fill="#38b6ff" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26 33H29.5C36.4036 33 42 27.4036 42 20.5C42 13.5964 36.4036 8 29.5 8H18.5C11.5964 8 6 13.5964 6 20.5C6 28.4145 11.2167 33.2537 16.9239 36.2262C19.7585 37.7025 22.6136 38.6566 24.7728 39.2414C25.2149 39.3611 25.626 39.4649 26 39.5542V33ZM28 42C28 42 27.2439 41.8897 26 41.6077C20.2362 40.3007 4 35.305 4 20.5C4 12.4919 10.4919 6 18.5 6H29.5C37.5081 6 44 12.4919 44 20.5C44 28.5081 37.5081 35 29.5 35H28V42Z" fill="#ff5757"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.4068 12.05C24.085 12.0079 22.7009 12.2548 21.5479 12.8141C20.3942 13.3737 19.3772 14.2999 19.0314 15.6471C18.8941 16.182 19.2164 16.727 19.7514 16.8643C20.2863 17.0016 20.8313 16.6793 20.9686 16.1443C21.1205 15.5527 21.5946 15.0143 22.4208 14.6135C23.2363 14.218 24.2897 14.0155 25.3432 14.049C26.4024 14.0827 27.3619 14.3511 28.0241 14.7918C28.3077 14.9805 28.5696 15.2174 28.7523 15.5344C28.9415 15.8624 29 16.1964 29 16.5C29 16.9899 28.8581 17.3425 28.6476 17.6194C28.4264 17.9104 28.0947 18.1616 27.6643 18.3699C26.7873 18.7944 25.6897 18.9516 24.9332 19.0022C24.408 19.0374 24 19.4736 24 20V21.5C24 22.0523 24.4477 22.5 25 22.5C25.5114 22.5 25.9343 22.1153 25.993 21.62C26.0431 21.1967 26.356 20.8517 26.7724 20.7606C27.3579 20.6326 27.9692 20.4443 28.5357 20.1701C29.8012 19.5576 31 18.4226 31 16.5C31 14.9863 30.2219 13.8521 29.1322 13.1268C28.0762 12.424 26.7235 12.0919 25.4068 12.05ZM20.675 11.0146C22.1657 10.2915 23.8805 10.0004 25.4704 10.051C27.0442 10.101 28.7902 10.4968 30.2402 11.4618C31.7827 12.4884 33 14.2006 33 16.5C33 19.4627 31.0769 21.1621 29.407 21.9704C28.8736 22.2285 28.3273 22.4209 27.8052 22.5651C27.3754 23.6964 26.2821 24.5 25 24.5C23.3431 24.5 22 23.1568 22 21.5V20C22 18.4209 23.2241 17.1121 24.7996 17.0067C25.4723 16.9617 26.2637 16.8259 26.793 16.5697C26.861 16.5368 26.9133 16.5072 26.953 16.4824C26.9421 16.4745 26.9298 16.466 26.916 16.4568C26.6467 16.2775 26.0799 16.0734 25.2796 16.048C24.4948 16.023 23.772 16.181 23.2937 16.413C23.0267 16.5425 22.9256 16.6444 22.8949 16.683C22.4657 18.263 20.8451 19.2099 19.2541 18.8015C17.6493 18.3896 16.6822 16.7546 17.0942 15.1498C17.6336 13.0486 19.192 11.734 20.675 11.0146ZM22.8835 16.6997C22.8833 16.6997 22.8846 16.697 22.8881 16.6919C22.8855 16.6973 22.8837 16.6998 22.8835 16.6997ZM27.0553 16.4092L27.1747 16.5L27.0553 16.4092ZM25 27C24.4477 27 24 27.4477 24 28C24 28.5523 24.4477 29 25 29C25.5523 29 26 28.5523 26 28C26 27.4477 25.5523 27 25 27ZM22 28C22 26.3432 23.3431 25 25 25C26.6568 25 28 26.3432 28 28C28 29.6569 26.6568 31 25 31C23.3431 31 22 29.6569 22 28Z" fill="#38b6ff"/>
                    </svg>
                </a>
                <a  href="https://www.facebook.com/AssoGoodBerry">
                    <svg width="50px" height="50px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="20" fill="#3B5998"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.315 16.9578C28.6917 16.8331 27.8498 16.74 27.3204 16.74C25.8867 16.74 25.7936 17.3633 25.7936 18.3607V20.1361H29.3774L29.065 23.8137H25.7936V35H21.3063V23.8137H19V20.1361H21.3063V17.8613C21.3063 14.7453 22.7708 13 26.4477 13C27.7252 13 28.6602 13.187 29.8753 13.4363L29.315 16.9578Z" fill="white"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/good_berry_asso/">
                    <svg width="50px" height="50px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="20" fill="#C13584"/>
                        <path d="M24 14.1622C27.2041 14.1622 27.5837 14.1744 28.849 14.2321C30.019 14.2855 30.6544 14.481 31.0773 14.6453C31.6374 14.863 32.0371 15.123 32.457 15.5429C32.877 15.9629 33.137 16.3626 33.3547 16.9227C33.519 17.3456 33.7145 17.981 33.7679 19.1509C33.8256 20.4163 33.8378 20.7958 33.8378 23.9999C33.8378 27.2041 33.8256 27.5836 33.7679 28.849C33.7145 30.019 33.519 30.6543 33.3547 31.0772C33.137 31.6373 32.877 32.0371 32.4571 32.457C32.0371 32.8769 31.6374 33.1369 31.0773 33.3546C30.6544 33.519 30.019 33.7144 28.849 33.7678C27.5839 33.8255 27.2044 33.8378 24 33.8378C20.7956 33.8378 20.4162 33.8255 19.151 33.7678C17.981 33.7144 17.3456 33.519 16.9227 33.3546C16.3626 33.1369 15.9629 32.8769 15.543 32.457C15.1231 32.0371 14.863 31.6373 14.6453 31.0772C14.481 30.6543 14.2855 30.019 14.2321 28.849C14.1744 27.5836 14.1622 27.2041 14.1622 23.9999C14.1622 20.7958 14.1744 20.4163 14.2321 19.1509C14.2855 17.981 14.481 17.3456 14.6453 16.9227C14.863 16.3626 15.123 15.9629 15.543 15.543C15.9629 15.123 16.3626 14.863 16.9227 14.6453C17.3456 14.481 17.981 14.2855 19.151 14.2321C20.4163 14.1744 20.7959 14.1622 24 14.1622ZM24 12C20.741 12 20.3323 12.0138 19.0524 12.0722C17.7752 12.1305 16.9028 12.3333 16.1395 12.63C15.3504 12.9366 14.6812 13.3469 14.0141 14.0141C13.3469 14.6812 12.9366 15.3504 12.63 16.1395C12.3333 16.9028 12.1305 17.7751 12.0722 19.0524C12.0138 20.3323 12 20.741 12 23.9999C12 27.259 12.0138 27.6676 12.0722 28.9475C12.1305 30.2248 12.3333 31.0971 12.63 31.8604C12.9366 32.6495 13.3469 33.3187 14.0141 33.9859C14.6812 34.653 15.3504 35.0633 16.1395 35.3699C16.9028 35.6666 17.7752 35.8694 19.0524 35.9277C20.3323 35.9861 20.741 35.9999 24 35.9999C27.259 35.9999 27.6677 35.9861 28.9476 35.9277C30.2248 35.8694 31.0972 35.6666 31.8605 35.3699C32.6496 35.0633 33.3188 34.653 33.9859 33.9859C34.653 33.3187 35.0634 32.6495 35.37 31.8604C35.6667 31.0971 35.8695 30.2248 35.9278 28.9475C35.9862 27.6676 36 27.259 36 23.9999C36 20.741 35.9862 20.3323 35.9278 19.0524C35.8695 17.7751 35.6667 16.9028 35.37 16.1395C35.0634 15.3504 34.653 14.6812 33.9859 14.0141C33.3188 13.3469 32.6496 12.9366 31.8605 12.63C31.0972 12.3333 30.2248 12.1305 28.9476 12.0722C27.6677 12.0138 27.259 12 24 12Z" fill="white"/>
                        <path d="M24.0059 17.8433C20.6026 17.8433 17.8438 20.6021 17.8438 24.0054C17.8438 27.4087 20.6026 30.1675 24.0059 30.1675C27.4092 30.1675 30.1681 27.4087 30.1681 24.0054C30.1681 20.6021 27.4092 17.8433 24.0059 17.8433ZM24.0059 28.0054C21.7968 28.0054 20.0059 26.2145 20.0059 24.0054C20.0059 21.7963 21.7968 20.0054 24.0059 20.0054C26.2151 20.0054 28.0059 21.7963 28.0059 24.0054C28.0059 26.2145 26.2151 28.0054 24.0059 28.0054Z" fill="white"/>
                        <path d="M31.8507 17.5963C31.8507 18.3915 31.206 19.0363 30.4107 19.0363C29.6154 19.0363 28.9707 18.3915 28.9707 17.5963C28.9707 16.801 29.6154 16.1562 30.4107 16.1562C31.206 16.1562 31.8507 16.801 31.8507 17.5963Z" fill="white"/>
                    </svg>
                </a>
                <a>
                    <svg fill="#38b6ff" width="50px" height="50px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <title>Mentions-Légales</title>
                        <path d="M24.064 6.583l-3.773 8.375h-1.098l4.024-8.916h-6.213v20.771c1.28 0.047 7.813 2.167 7.813 2.167v1.020h-17.56v-1.089c0 0 6.678-2.099 7.684-2.099v-20.77h-6.015l4.025 8.916h-1.098l-3.773-8.375-3.773 8.375h-1.098l4.048-8.966v-1.034h6.754c0-1.353 0.907-2.458 1.965-2.458 1.119 0 1.965 1.168 1.965 2.458h6.878v0.887l4.116 9.113h-1.098l-3.773-8.375zM13.020 15.979c0 2.693-1.868 5.282-4.939 5.282-3.002 0-4.939-2.589-4.939-5.282-0.001 0.004 9.878 0.004 9.878 0zM19.262 15.979c0 0.005 9.879 0.005 9.879 0 0 2.693-1.868 5.282-4.939 5.282-3.003 0-4.94-2.589-4.94-5.282z"></path>
                    </svg>
                </a>
            </nav>
        </footer>
        @vite([ 'resources/js/app.js'])
    </body>
</html>