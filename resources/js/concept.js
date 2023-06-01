document.addEventListener("DOMContentLoaded", function() {
  const videoWrapper = document.querySelector(".wrapper");
  const videoButton = document.querySelector(".button");
  const videoElement = document.querySelector("video");

  videoButton.addEventListener("click", function() {
    videoWrapper.classList.add("playing");
    videoElement.play();
  });
});