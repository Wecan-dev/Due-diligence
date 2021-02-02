$(document).ready(function () {
  setTimeout(function () {
    $('.elipse').fadeOut(300);
  }, 3000)
});

// script for tab steps
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

  var href = $(e.target).attr('href');
  var $curr = $(".process-model  a[href='" + href + "']").parent();

  $('.process-model li').removeClass();

  $curr.addClass("active");
 
});


$(document).ready(function () {
  $('.toTop').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({ // 有些瀏覽器只支援html，有些只支援body 所以兩個都寫進去
      scrollTop: 0,
    }, 700)
  });
 
});


jQuery('.single-item').slick({
  dots: true,
  autoplay: false,
  dots: false,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,

     responsive: [
{
  breakpoint: 700,
  settings: {
    arrows: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1
  }
},
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
  }
}
]});

// end  script for tab steps
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.header__main').addClass("fixed-me");
    } else {
      $(".header__main").removeClass("fixed-me");
    }
  });
});

$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.nav-link').addClass("color");
    } else {
      $(".nav-link").removeClass("color");
    }
  });
});

$('.nav-item').click(function () {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});


$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.logo').addClass("here");
    } else {
      $(".logo").removeClass("here");
    }
  });
});

const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});



$('.multiple-items').slick({
    autoplay:true,
    autoplaySpeed: 6000,
    speed: 500,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    dots:true,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: false,
                slidesToShow: 1,
                verticalSwiping: false,
                vertical: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }
    ]
});

$('.multiple-card').slick({
  autoplay:true,
  autoplaySpeed: 6000,
  speed: 500,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: true,
  dots:false,
  responsive: [
      {
          breakpoint: 700,
          settings: {
              arrows: true,
              slidesToShow: 1,
       
              slidesToScroll: 1
          }
      },
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
          }
      }
  ]
});

$(document).ready(function() {
  var $slider = $('.slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
    
    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
  
  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 400
  });  
});