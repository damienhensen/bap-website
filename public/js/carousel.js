let carousel = document.querySelector('.img--here');
let images = document.querySelectorAll('.product--details__carousel--img');
let imgNo = document.getElementById('img--no');
let no = 0;

for (let i = 0; i < images.length; i++) {
    images[i].parentNode.removeChild(images[i]);
}

carousel.appendChild(images[no]);

document.querySelector('.previous--img').addEventListener('click', ()=> {
    carousel.removeChild(images[no]);
    if (no != 0) {
        no--;
    } else {
        no = 4;
    }
    // imgNo.innerHTML = no;
    carousel.appendChild(images[no]);
});

document.querySelector('.next--img').addEventListener('click', ()=> {
    carousel.removeChild(images[no]);
    if (no != 4) {
        no++;
    } else {
        no = 0;
    }
    // imgNo.innerHTML = no;
    carousel.appendChild(images[no]);
});
