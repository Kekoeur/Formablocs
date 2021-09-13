let slidePosition = 0;
let slidePosition2 = 0;

const slides = document.getElementsByClassName('home-carousel-slides');
const slides2 = document.getElementsByClassName('home2-carousel-slides');

const totalSlides = slides.length;
const totalSlides2 = slides2.length;


const prevOne = document.getElementById('prev-home');
const nextOne = document.getElementById('next-home');

const prevTwo = document.getElementById('prev-home2');
const nextTwo = document.getElementById('next-home2');


nextOne.addEventListener('click', () => {
	toNextSlide();
})

prevOne.addEventListener('click', () => {
	toPrevSlide();
})

nextTwo.addEventListener('click', () => {
	toNextSlide2();
})

prevTwo.addEventListener('click', () => {
	toPrevSlide2();
})

function updateSlidePosition() {
	for(let slide of slides){
		slide.classList.remove('current-home-carousel');
		slide.classList.add('hidden-slide')
	}
	slides[slidePosition].classList.add('current-home-carousel');
	slides[slidePosition].classList.remove('hidden-slide');
}

function updateSlidePosition2() {
	for(let slide of slides2){
		slide.classList.remove('current-home-carousel');
		slide.classList.add('hidden-slide')
	}
	slides2[slidePosition2].classList.add('current-home-carousel');
	slides2[slidePosition2].classList.remove('hidden-slide');
}


function toNextSlide() {
	if(slidePosition === totalSlides - 1){
		slidePosition = 0;
	} else {
		slidePosition++;
	}
	updateSlidePosition();
}

function toPrevSlide() {
	if(slidePosition === 0){
		slidePosition = totalSlides - 1;
	} else {
		slidePosition--;
	}
	updateSlidePosition();
}

function toNextSlide2() {
	if(slidePosition2 === totalSlides2 - 1){
		slidePosition2 = 0;
	} else {
		slidePosition2++;
	}
	updateSlidePosition2();
}

function toPrevSlide2() {
	if(slidePosition2 === 0){
		slidePosition2 = totalSlides2 - 1;
	} else {
		slidePosition2--;
	}
	updateSlidePosition2();
}
