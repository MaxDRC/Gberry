// JavaScript
const typedText = document.getElementById("typed-text");
const textToType = "GoodBerry qu'est-ce que c'est ?";
let index = 0;

function typeText() {
  if (index < textToType.length) {
    typedText.innerHTML += textToType.charAt(index);
    index++;
    setTimeout(typeText, 200); // Temps d'attente avant le prochain caractère
  }
}

typeText();