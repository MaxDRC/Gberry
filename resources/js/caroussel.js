const carouselItems = document.querySelectorAll('#new-carousel > img');
const carouselGauche = document.querySelector('#new-carousel__ctrl__gch');
const carouselDroit = document.querySelector('#new-carousel__ctrl__drt');

let currentIndex = 0;


// Show the first item initially
showItem(0);

    carouselGauche.addEventListener('click', () => {
        if(currentIndex > 0){
            currentIndex = currentIndex - 1;
            showItem(currentIndex);
        }
        else{
            currentIndex = carouselItems.length - 1;
            showItem(currentIndex);
        }
    });
    carouselDroit.addEventListener('click', () => {
        if((currentIndex < carouselItems.length - 1)){
            currentIndex = currentIndex + 1;
            showItem(currentIndex);
        }
        else{
            currentIndex = 0;
            showItem(currentIndex);
        }
    });



setInterval(() => showItem((currentIndex + 1) % carouselItems.length), 10000);

showItem(0);
function showItem(index) {
    console.log(index);
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


    currentIndex = index;
}

function changeItem(index) {
    return function () {
        console.log(index);
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
