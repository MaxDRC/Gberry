// JavaScript
const typedText = document.getElementById("typed-text");
const textToType = "GoodBerry kézako ?";
let index = 0;

function typeText() {
  if (index < textToType.length) {
    typedText.innerHTML += textToType.charAt(index);
    index++;
    setTimeout(typeText, 200); // Temps d'attente avant le prochain caractère
  }
}

typeText();