// const carouselItems = document.querySelectorAll('.carousel-item');
// const carouselControls = document.querySelectorAll(
//     '.carousel-control-prev, .carousel-control-next'
// );
// let currentIndex = 0;

// function showItem(index) {
//     carouselItems.forEach(
//         item => item.classList.toggle('active', item === carouselItems[index])
//     );
//     carouselControls.forEach(
//         control => control.classList.toggle('active', control.dataset.bsSlide === (
//             index === 0
//                 ? 'prev'
//                 : 'next'
//         ))
//     );
//     currentIndex = index;
// }

// function changeItem(index) {
//     return function () {
//         showItem(index);
//     }
// }
const carouselItems = document.querySelectorAll('.carousel-item');
const carouselControls = document.querySelectorAll(
    '.carousel-control-prev',
    '.carousel-control-next'
);

let currentIndex = 0;

function showItem(index) {
    // Loop through all carousel items
    carouselItems.forEach((item, i) => {
        // If the current index matches the current item, set it to active
        if (i === index) {
            item
                .classList
                .add('active');
        } else {
            item
                .classList
                .remove('active');
        }
    });

    // Loop through all carousel controls
    carouselControls.forEach((control, i) => {
        // If the current index matches the current control, set it to active
        if (i === index) {
            control
                .classList
                .add('active');
        } else {
            control
                .classList
                .remove('active');
        }
    });

    currentIndex = index;
}

function changeItem(index) {
    return function () {
        // If we're at the beginning of the carousel and trying to go back, go to the
        // last item
        if (index < 0) {
            showItem(carouselItems.length - 1);
            // If we're at the end of the carousel and trying to go forward, go to the first
            // item
        } else if (index >= carouselItems.length) {
            showItem(0);
            // Otherwise, show the item at the specified index
        } else {
            showItem(index);
        }
    };
}

// Add click event listeners to carousel controls
carouselControls.forEach((control, index) => {
    control.addEventListener('click', changeItem(currentIndex + (
        index === 0
            ? -1
            : 1
    )));
});

// Start the carousel
setInterval(() => {
    const nextIndex = (currentIndex + 1) % carouselItems.length;
    showItem(nextIndex);
}, 5000);

// Show the first item initially
showItem(0);
carouselControls.forEach(
    (control, index) => control.addEventListener('click', changeItem(index))
);

setInterval(() => showItem((currentIndex + 1) % carouselItems.length), 5000);

showItem(0);