
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

 
  // INIZIO SCROLL NAVBAR
  
  const navbar = document.querySelector('#nav')

window.addEventListener('scroll', function(e) {
  const lastPosition = window.scrollY
  if (lastPosition > 5 ) {
    navbar.classList.add('bg-light')
    navbar.classList.remove('bg-transparent')
  } else {
    navbar.classList.remove('bg-light')
    navbar.classList.add('bg-transparent')
    // aggiungere la transition

  }
})

// FINE SCROLL NAVBAR


// INIZIO ICONA CUORI
// let addFavourite = document.querySelector('#addFavourite')

//   addFavourite.addEventListener('click', (el)=>{
//     addFavourite.classList.remove("bi-heart")
//     addFavourite.classList.add("bi-heart-fill")
//   })

//   addFavourite.addEventListener('click', (el)=>{
//     addFavourite.classList.remove("bi-heart-fill")
//     addFavourite.classList.add("bi-heart")
//   })

//   let isFavourite = false;

// addFavourite.addEventListener('click', (el)=>{
//   isFavourite = !isFavourite;
//   if (isFavourite) {
//     addFavourite.classList.remove("bi-heart")
//     addFavourite.classList.add("bi-heart-fill")
//   } else {
//     addFavourite.classList.remove("bi-heart-fill")
//     addFavourite.classList.add("bi-heart")
//   }
// })

// FINE ICONA CUORI