window.addEventListener('load', function() {
    // Obtenez le bouton du menu burger (header)
    var menuBurger = document.querySelector('.btn-menu-burger');

    // Obtenez le menu mobile (header)
    var menuMobile = document.querySelector('.menu-mobile');
    
    // Obtenez tous les éléments avec un attribut data-toggle
    var toggleElements = document.querySelectorAll('[data-toggle]');

    // Fonction pour activer / désactiver le menu mobile du header

    // Ajoutez un événement de clic à tous les éléments avec un attribut data-toggle
    toggleElements.forEach(function(element) {
        element.addEventListener('click', function () {
            // Obtenez l'ID du menu mobile à partir de l'attribut data-toggle
            var target = element.getAttribute('data-toggle');
            var targetMenu = document.getElementById(target);
            
            // masquer le menu mobile (l'icône du menu burger)
            menuBurger.classList.toggle('active');
        
            // Basculez la classe active sur le menu mobile pour afficher / masquer le menu
            targetMenu.classList.toggle('active');
        
            // Basculez la classe active sur le corps pour empêcher le défilement de la page
            // lorsque le menu mobile est affiché
            document.body.classList.toggle('active');
        });
    });
    // Ajoutez un événement de clic au bouton du menu burger
    menuBurger.addEventListener('click', function () {
        // Basculez la classe active sur le bouton du menu burger pour afficher /
        // masquer le menu mobile (l'icône du menu burger)
        menuBurger
            .classList
            .toggle('active');
        
        // Basculez la classe active sur le menu mobile pour afficher / masquer le menu
        menuMobile
            .classList
            .toggle('active');
    
        // Basculez la classe active sur le corps pour empêcher le défilement de la page
        // lorsque le menu mobile est affiché
        document
            .body
            .classList
            .toggle('active');
    });
    
    // Désactive le menu en cliquant sur le corps
    document.body.addEventListener('click', function(event) {
        // Vérifie si l'élément cliqué est en dehors du menu mobile et du menu burger
        if(!menuMobile.contains(event.target) && !menuBurger.contains(event.target)) {
            // Désactive la classe active sur le menu burger et le menu mobile
            menuBurger.classList.remove('active');
            menuMobile.classList.remove('active');
            
            // Désactive la classe active sur le corps pour activer le défilement de la page
            document.body.classList.remove('active');
        }
    });

});

