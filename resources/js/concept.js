const video = document.getElementById('myVideo');
const titles = document.getElementById('titles');

video.addEventListener('loadedmetadata', () => {
  const duration = video.duration;
  const h1 = titles.querySelector('h1');
  const h2 = titles.querySelector('h2');

  // Afficher h1 et h2 successivement
  h1.style.animationDelay = '1s';
  h2.style.animationDelay = '5s';

  // Disparition des titres et lancement de la vidéo
  setTimeout(() => {
    h1.style.animationName = 'fadeOutUp';
    h2.style.animationName = 'fadeOutDown';
    setTimeout(() => {
      video.play();
    }, 1000); // Lancement de la vidéo après 1 seconde
  }, 10000);
});
