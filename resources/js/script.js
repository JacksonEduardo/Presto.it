
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });


  // INIZIO CAROSELLO HOMEPAGE

  let swiper3 = new Swiper(".mySwiper3", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


  // FINE CAROSELLO HOMEPAGE

  // SCROLL NAVBAR

  // const navbar = document.querySelector('#nav')

  // window.addEventListener('scroll', function(e) {
  // const lastPosition = window.scrollY
  // if (lastPosition > 620 ) {
  //   navbar.classList.add('nav-active')
  // } else if (navbar.classList.contains('active')) {
  //   navbar.classList.remove('nav-active')
  // } else {
  //   navbar.classList.remove('nav-active')
  // }
  // })

  const navbar = document.querySelector('#nav')

window.addEventListener('scroll', function(e) {
  const lastPosition = window.scrollY
  if (lastPosition > 590 ) {
    navbar.classList.add('nav-active')
  } else {
    navbar.classList.remove('nav-active')
  }

  if (!navbar.classList.contains('nav-active')) {
    navbar.classList.add('nav-reverse')
  } else {
    navbar.classList.remove('nav-reverse')
  }
})