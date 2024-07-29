//
// IMAGE SLIDER
//

let currentSlide = 1;
changeSlide(1);

function changeSlide(n) {
	let slides = document.getElementsByClassName("slider-item");
	let dots = document.getElementsByClassName("dot");
	for (let i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (let i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	currentSlide = n;
	slides[n - 1].style.display = "flex";
	dots[n - 1].className += " active";
}

setInterval(nextSlide, 3000);

function nextSlide() {
	let m = currentSlide;
	if (m === 7) {
		m = 1;
	} else {
		m++;
	}
	changeSlide(m);
}

const SLIDER = document.getElementById("slider");
let pressed = false;
let startX;
let cursorX;

SLIDER.addEventListener("mousedown", (e) => {
	pressed = true;
	startX = e.offsetX - SLIDER.offsetLeft;
	cursorX = e.offsetX - SLIDER.offsetLeft;
	SLIDER.style.cursor = "grabbing";
});

SLIDER.addEventListener("mouseenter", () => {
	SLIDER.style.cursor = "grab";
});

SLIDER.addEventListener("mouseup", () => {
	SLIDER.style.cursor = "grab";
	pressed = false;
});

SLIDER.addEventListener("mousemove", (e) => {
	if (!pressed) return;
	e.preventDefault();

	cursorX = e.offsetX - SLIDER.offsetLeft;
	if (cursorX - startX < -100) {
		SLIDER.style.cursor = "grab";
		pressed = false;
		nextSlide();
	} else if (cursorX - startX > 100) {
		SLIDER.style.cursor = "grab";
		pressed = false;
		let m = currentSlide;
		if (m === 1) {
			m = 7;
		} else {
			m--;
		}
		changeSlide(m);
	}
});
