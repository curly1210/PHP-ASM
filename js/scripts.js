var swiper = new Swiper(".banner-slider", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".product-slider", {
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".comment-slider", {
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".most-product-slider", {
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

// Myself make slide-show
const track = document.querySelector(".slider-wrapper");
const slides = Array.from(track.children);
const nextButton = document.querySelector(".right");
const prevButton = document.querySelector(".left");
const firstButton = document.querySelector(".first");
const lastButton = document.querySelector(".last");

let indexSlide = 0;

const slideWidth = slides[0].getBoundingClientRect().width;

// set position the slide
const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + "px";
};

slides.forEach(setSlidePosition);

// Press button FIRST
firstButton.addEventListener("click", () => {
  const currentSlide = track.querySelector(".current-slide");
  indexSlide = 0;
  moveToSlide(track, currentSlide, slides[indexSlide]);
});

// Press button LAST
lastButton.addEventListener("click", () => {
  const currentSlide = track.querySelector(".current-slide");
  indexSlide = 2;
  moveToSlide(track, currentSlide, slides[indexSlide]);
});

const moveToSlide = (track, currentSlide, targetSlide) => {
  track.style.transform = "translateX(-" + targetSlide.style.left + ")";
  currentSlide.classList.remove("current-slide");
  targetSlide.classList.add("current-slide");
};

// when I click left, move slides to the left

prevButton.addEventListener("click", () => {
  if (indexSlide === 0) {
    moveToSlide(track, slides[indexSlide], slides[2]);
    indexSlide = 2;
  } else {
    const currentSlide = track.querySelector(".current-slide");
    const prevSlide = currentSlide.previousElementSibling;
    indexSlide--;

    moveToSlide(track, currentSlide, prevSlide);
  }
});

// when I click right, move slides to the right
nextButton.addEventListener("click", () => {
  if (indexSlide === slides.length - 1) {
    // console.log("sdsd");
    moveToSlide(track, slides[indexSlide], slides[0]);
    indexSlide = 0;
  } else {
    const currentSlide = track.querySelector(".current-slide");
    const nextSlide = currentSlide.nextElementSibling;
    indexSlide++;

    console.log(indexSlide);

    // move the slide
    moveToSlide(track, currentSlide, nextSlide);
  }
});

// var swiper = new Swiper(".category-slider", {
//   loop:true,
//   pagination: {
//     el: ".swiper-pagination",
//   },
// });
