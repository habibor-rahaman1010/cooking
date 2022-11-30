const swiper = new Swiper(".swiper", {
    speed: 400,
    spaceBetween: 100,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 25,
    autoHeight: true,
    // Responsive breakpoints
    breakpoints: {
      580: {
        slidesPerView: 2,
        spaceBetween: 25,
      },
      940: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
  
  setInterval(() => {
    swiper.slideNext();
  }, 2000);