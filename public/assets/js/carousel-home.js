let slidePosition = 0;
let slidePosition2 = 0;
let slidePosition3 = 0;

const slides = document.getElementsByClassName('home-carousel-slides');
const slides2 = document.getElementsByClassName('home2-carousel-slides');
const slidesMobile = document.getElementsByClassName('home3-carousel-slides');

const totalSlides = slides.length;
const totalSlides2 = slides2.length;
const totalSlides3 = slidesMobile.length;


const prevOne = document.getElementById('prev-home');
const nextOne = document.getElementById('next-home');

const prevTwo = document.getElementById('prev-home2');
const nextTwo = document.getElementById('next-home2');

const prevThree = document.getElementById('prev-home3');
const nextThree = document.getElementById('next-home3');


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

nextThree.addEventListener('click', () => {
	toNextSlide3();
})

prevThree.addEventListener('click', () => {
	toPrevSlide3();
})

function updateSlidePosition() {
	for(let slide of slides){
		slide.classList.remove('current-home-carousel');
		slide.classList.add('.hidden-home-slide')
	}
	slides[slidePosition].classList.add('current-home-carousel');
	slides[slidePosition].classList.remove('.hidden-home-slide');
}

function updateSlidePosition2() {
	for(let slide of slides2){
		slide.classList.remove('current-home2-carousel');
		slide.classList.add('.hidden-home2-slide')
	}
	slides2[slidePosition2].classList.add('current-home2-carousel');
	slides2[slidePosition2].classList.remove('.hidden-home2-slide');
}

function updateSlidePosition3() {
	for(let slide of slidesMobile){
		slide.classList.remove('current-home2-carousel');
		slide.classList.add('.hidden-home2-slide')
	}
	slidesMobile[slidePosition3].classList.add('current-home2-carousel');
	slidesMobile[slidePosition3].classList.remove('.hidden-home2-slide');
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

function toNextSlide3() {
	if(slidePosition3 === totalSlides3 - 1){
		slidePosition3 = 0;
	} else {
		slidePosition3++;
	}
	updateSlidePosition3();
}

function toPrevSlide3() {
	if(slidePosition3 === 0){
		slidePosition3 = totalSlides3 - 1;
	} else {
		slidePosition3--;
	}
	updateSlidePosition3();
}
