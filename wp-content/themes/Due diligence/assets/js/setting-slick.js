$('.main-banner__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,

  arrows: true,
	focusOnSelect: false,
	 autoplaySpeed: 5000,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        autoplay: true,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 5000
      }
    }
  ]
});

