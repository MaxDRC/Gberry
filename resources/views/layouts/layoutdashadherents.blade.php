<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="header_footer.css"> -->

        @yield('css')
        
        <!-- Scripts -->
        
        @vite(['resources/css/layoutdashadherents.css', 'resources/js/app.js'])

    </head>

    <body>
        <header>
            <div class="dashboard">
                <div class="logo">
                    <a href="/">
                        <svg width="100px" height="100px" version="1.1" viewBox="0 0 67.908 100" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                            <g transform="matrix(.25441 0 0 .25441 -29.48 -9.1409)">
                                <path d="m138.45 427.74c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.4637 4.1743 5.7384 7.6535 5.3039 14.477-0.26751 4.2013-1.0602 7.081-2.4893 9.0427l-2.0968 2.8784 2.0867 2.8224c2.9251 3.9564 3.4512 13.998 0.98283 18.759-2.9538 5.6979-7.4367 8.0199-15.483 8.0199-4.6235 0-7.0427-0.41483-7.3684-1.2635zm15.625-7.6596c2.3687-2.3687 2.9231-3.7805 2.9231-7.4442 0-5.9412-2.9177-9.3566-8.75-10.243l-4.25-0.64565v21.256h3.5769c2.6201 0 4.3588-0.78191 6.5-2.9231zm-0.15729-25.827c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm33.116 32.816c-1.3965-2.6093-1.3965-52.522 0-55.131 0.93018-1.738 2.1873-1.9343 12.393-1.9343 9.5667 0 11.456 0.25654 11.982 1.6268 1.2556 3.2719-1.2711 4.3732-10.033 4.3732h-8.3776v19.905l6.25 0.29771c5.9898 0.28532 6.2632 0.41221 6.5664 3.0477l0.31642 2.75h-13.133v21h8.3776c6.2268 0 8.6972 0.3851 9.6224 1.5 0.99319 1.1967 0.99319 1.8033 0 3-0.9665 1.1646-3.6696 1.5-12.087 1.5-9.6961 0-10.952-0.2045-11.878-1.9343zm48.444 0.7409c-0.28147-0.7335-0.39195-13.928-0.24552-29.32l0.26623-27.986 7.3092-0.295c5.9772-0.24125 7.9168 0.0805 10.644 1.7658 4.3726 2.7024 6.5473 7.512 6.5473 14.48 0 6.3918-1.7146 10.446-5.6213 13.292l-2.6773 1.9503 4.2715 12.114c4.4348 12.577 4.6038 15.563 0.85005 15.013-1.8219-0.26682-2.9654-2.4854-6.8656-13.32-3.7533-10.427-5.0535-13-6.5685-13-1.7293 0-1.9311 1.0981-2.3888 13-0.48284 12.554-0.57738 13.011-2.7545 13.32-1.24 0.17607-2.4848-0.28-2.7662-1.0135zm16.066-34.261c1.9632-1.9632 2.4546-3.4736 2.4546-7.5454 0-6.6731-2.9791-10-8.9546-10h-4.0454v20h4.0454c2.9618 0 4.7029-0.65747 6.5-2.4546zm32.907 34.191c-0.26667-0.69492-0.36504-13.857-0.21861-29.25l0.26623-27.986h8.1716c7.3369 0 8.4448 0.25539 10.845 2.5 4.0003 3.7409 5.4833 7.3153 5.4833 13.216 0 6.0831-2.2124 10.975-6.1298 13.553l-2.6298 1.7309 4.5142 12.33c4.0859 11.16 4.3665 12.478 2.9574 13.887-2.5732 2.5732-4.2303 0.87519-7.1931-7.3704-6.5819-18.318-6.5952-18.346-8.5907-18.346-1.7997 0-1.9282 0.81945-1.9282 12.3 0 12.285-0.61303 14.7-3.7314 14.7-0.73227 0-1.5496-0.56857-1.8162-1.2635zm15.467-33.486c1.1777-0.9625 2.4074-3.4131 2.7328-5.4457 1.2547-7.8381-2.1012-12.804-8.6524-12.804h-4v20h3.8892c2.2216 0 4.8073-0.75034 6.0304-1.75zm42.789 34.126c-0.38987-0.38987-0.70087-6.8214-0.69111-14.292l0.01773-13.583-4.6897-13.581c-4.7466-13.746-5.0184-16.919-1.449-16.919 1.9316 0 3.4042 2.977 7.042 14.236 0.66392 2.0548 1.5863 3.9704 2.0498 4.2568 0.46345 0.28643 2.0657-3.1948 3.5606-7.7361 3.0584-9.2913 3.9394-10.757 6.4664-10.757 3.265 0 2.937 2.897-1.7818 15.735-4.6373 12.616-4.698 12.94-5.2128 27.765-0.49099 14.139-0.63797 15.017-2.562 15.292-1.1226 0.1607-2.3601-0.0268-2.75-0.41666zm-206.21-67.262c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908zm-105.73-60.571-36.773-46.112 13.812-60.879c8.5313-37.604 14.256-60.882 14.975-60.888 1.5424-0.01151 48.437 36.003 47.97 36.841-0.19927 0.35778-3.8717 15.664-8.1609 34.013-7.0345 30.094-7.6601 33.586-6.3852 35.647 0.77736 1.2564 9.8494 12.456 20.16 24.888l18.747 22.603h65.856l18.727-22.75c10.3-12.512 19.407-23.541 20.238-24.508 1.3636-1.5874 0.75045-4.9907-6.3059-35-4.299-18.283-8.0048-33.764-8.2351-34.402-0.23028-0.63813 9.4015-8.7774 21.404-18.087 23.181-17.981 25.944-19.964 26.726-19.182 0.83473 0.83473 27.716 120.08 27.396 121.53-0.16496 0.74673-16.642 21.842-36.615 46.878l-36.315 45.521h-120.45zm183.35-7.9149c17.875-22.518 32.5-41.511 32.5-42.207 0-3.0262-21.071-94.729-21.716-94.509-2.4468 0.8325-23.784 18.31-23.784 19.481 0 0.78894 3.4291 15.964 7.6202 33.722l7.6202 32.287-49.44 59.276-78.203-0.52303-24.298-29.355c-13.364-16.145-24.298-29.916-24.298-30.601 0-0.6855 3.375-15.481 7.5-32.879 4.125-17.398 7.5-32.029 7.5-32.512 0-0.9633-23.935-19.578-24.437-19.006-0.1705 0.19421-5.2339 21.728-11.252 47.853l-10.942 47.5 66.131 82.464 107-0.0496 32.5-40.941zm-121.97-43.437c-7.7159-9.6052-14.041-18.043-14.056-18.75-0.0147-0.70728 2.0993-10.7 4.6977-22.207l4.7244-20.921 40.622-19.659 40.742 19.405 5.0011 21.918 5.0011 21.918-28.938 35.76h-43.767zm57.971-4.7301c3.575-4.5044 8.0365-10.146 9.9144-12.537l3.4144-4.3474-6.6591-30.849-28.83-14.046-28.316 14.473-3.2158 13.5c-1.7687 7.425-3.2365 14.455-3.2618 15.623-0.0258 1.1906 4.0169 7.4268 9.204 14.198l9.25 12.075 32 0.0994 6.5-8.1899z" fill="#39b6fe"/>
                                <path d="m136.5 361.11c-5.2206-2.4047-8.7849-5.8383-11.665-11.237-2.3221-4.3525-2.3348-4.572-2.3348-40.376 0-34.979 0.0612-36.113 2.1584-40 7.7451-14.353 25.137-17.469 36.133-6.473 4.9896 4.9896 7.2083 11.192 7.2083 20.151 0 5.4885-0.3909 7.2128-2 8.8219-2.4069 2.4069-3.8402 2.5007-6.7775 0.4433-1.9076-1.3361-2.2225-2.4742-2.2225-8.0321 0-7.5698-1.8111-12.586-5.3909-14.932-3.2048-2.0998-8.6918-2.3084-12.143-0.46161-5.3132 2.8435-5.4665 4.0017-5.4665 41.298 0 32.703 0.0978 34.539 1.9661 36.914 4.1814 5.3158 12.537 6.064 16.807 1.5049 3.4989-3.7352 4.2265-7.316 4.2265-20.8v-12.935h-7.3c-8.0164 0-9.7-0.89018-9.7-5.1286 0-4.983 2.0534-5.8714 13.571-5.8714 15.355 0 14.429-1.8806 14.429 29.277 0 21.26-0.24744 25.631-1.5567 27.5-1.7674 2.5234-5.1606 2.8809-7.9542 0.83817-1.6126-1.1791-2.4748-1.1791-5.8168 0-5.3568 1.89-11.385 1.7028-16.172-0.50209zm55.155 0.0577c-2.0857-2.3047-2.1215-5.5619-0.0836-7.5998 1.3199-1.3199 4.6569-1.5714 20.845-1.5714 17.402 0 19.434 0.17759 20.929 1.8287 2.1712 2.3991 2.1005 5.4581-0.17375 7.5163-1.5667 1.4178-4.5535 1.655-20.845 1.655-17.153 0-19.178-0.17922-20.671-1.8287zm67.345-0.17127c-2.4069-2.4069-2.5007-3.8402-0.4433-6.7775 1.5196-2.1696 2.0289-2.2225 21.378-2.2225 21.57 0 22.316 0.18972 22.316 5.6751 0 4.8591-1.9633 5.3249-22.441 5.3249-17.476 0-18.951-0.14178-20.809-2zm67.5 0.65705c-1.9534-1.4606-2-2.6607-2-51.471 0-59.409-1.2506-54.186 12.973-54.186 12.664 0 18.519 1.8974 24.59 7.9687 7.7705 7.7705 8.1202 9.9486 7.7489 48.254-0.29925 30.871-0.40711 32.452-2.4752 36.278-2.5642 4.7433-7.4877 9.5723-12.338 12.101-4.8352 2.5208-25.516 3.2873-28.5 1.0562zm24.516-11.481c2.1639-1.1327 4.3511-3.5014 5.7712-6.25 2.2591-4.3724 2.2834-4.804 2-35.605-0.27315-29.692-0.38512-31.31-2.3486-33.938-3.711-4.9668-6.8056-6.5626-13.818-7.1255l-6.6202-0.53141v85.274h5.7656c3.6399 0 7.0502-0.67247 9.25-1.824zm-147.52-6.0759c-4.9433-2.2936-9.899-7.4022-11.949-12.318-2.0914-5.0142-2.2482-39.182-0.20222-44.064 3.6823-8.7872 11.678-14.128 21.152-14.128 9.628 0 16.333 4.4042 20.416 13.41 1.7993 3.9687 2.0427 6.5523 2.0621 21.884 0.0262 20.767-0.70249 23.888-7.0696 30.283-6.8567 6.8861-16.151 8.7646-24.408 4.9332zm14.58-10.806c5.3357-3.1519 6.0868-6.461 5.7358-25.27l-0.31537-16.898-2.9252-3.0505c-5.3516-5.5808-14.01-4.6867-17.869 1.8451-2.3711 4.014-2.5224 34.6-0.19349 39.104 2.8703 5.5505 10.06 7.5225 15.567 4.2696zm52.303 10.304c-5.5331-2.5764-9.821-7.3626-11.956-13.346-1.6608-4.6538-1.9098-33.917-0.33831-39.752 4.5762-16.992 25.363-23.001 37.117-10.731 6.47 6.7538 7.1292 9.033 7.5991 26.272 0.66093 24.248-1.9774 31.876-12.909 37.323-6.7226 3.35-12.666 3.421-19.512 0.23293zm17.867-12.552 2.75-3.0775v-18.349c0-16.995-0.15159-18.542-2.0536-20.96-3.0175-3.8361-8.594-5.2508-13.167-3.3402-6.6616 2.7834-7.2797 4.8474-7.2797 24.311 0 15.919 0.1584 17.434 2.0964 20.045 4.6658 6.2876 12.703 6.9117 17.654 1.3711zm-97.05-65.246c-1.989-1.989-1.426-6.5283 1.0225-8.2433 1.8123-1.2694 5.5548-1.5567 20.277-1.5567 19.656 0 22.5 0.69345 22.5 5.4853 0 5.1513-1.5074 5.5147-22.871 5.5147-14.011 0-20.076-0.34777-20.929-1.2zm67.181-1.341c-2.0619-3.1469-0.65241-7.1077 2.8348-7.966 1.2562-0.30917 10.336-0.43409 20.177-0.27759l17.893 0.28455 2.0092 2.6928c1.9038 2.5516 1.9213 2.8268 0.33359 5.25l-1.6756 2.5572h-39.908z" fill="#fe5757"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <nav>
                    <a href="{{ route('profile.edit') }}"> {{ __('Profile') }}</a>
                </nav>
                <nav>
                    <a href="#">Wallet Good Berry</a>
                </nav>
            </div>
            
        </header>
        @yield('content')
    </body>
</html>
           