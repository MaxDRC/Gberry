const carouselItems = document.querySelectorAll('.carousel-item');
const carouselControls = document.querySelectorAll(
    '.carousel-control-prev, .carousel-control-next'
);
let currentIndex = 0;

function showItem(index) {
    carouselItems.forEach(
        item => item.classList.toggle('active', item === carouselItems[index])
    );
    carouselControls.forEach(
        control => control.classList.toggle('active', control.dataset.bsSlide === (
            index === 0
                ? 'prev'
                : 'next'
        ))
    );
    currentIndex = index;
}

function changeItem(index) {
    return function () {
        showItem(index);
    }
}

carouselControls.forEach(
    (control, index) => control.addEventListener('click', changeItem(index))
);

setInterval(() => showItem((currentIndex + 1) % carouselItems.length), 5000);

showItem(0);