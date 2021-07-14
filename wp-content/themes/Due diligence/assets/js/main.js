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
    slidesToScroll: 1,
     arrows: true,
    dots:true,
	adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: true,
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
			
        },
		{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
			
        }
    ]
});
$('.how-flex').slick({
    autoplay:true,
    autoplaySpeed: 6000,
    speed: 500,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots:false,
	 adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: false,
                slidesToShow: 1,
                verticalSwiping: false,
                vertical: false,
                slidesToScroll: 1,
				 dots:true,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
				 dots:true,
            }
        },
		  {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
				 dots:true,
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
  slidesToScroll: 1,
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
		  
      },
	   {
          breakpoint: 1200,
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

const body = document.querySelector('body');
const searchBtn = document.querySelector('#search');
const searchInput = document.querySelector('#search-input');
let active = false;

body.addEventListener('click', (e) => {
  if(e.target.id === 'search' || e.target.id === 'search-input' || e.target.id === 'search-icon') {
    if(!active) {
      searchBtn.classList.add('active');
      searchInput.classList.add('active');
      active = true;
    }
  } else {
      searchBtn.classList.remove('active');
      searchInput.classList.remove('active');
      searchInput.value = '';
      active = false;
  }
});

jQuery(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  
  
  $('.btn-open-modal[href^=]').click(function(e){
	  alert('hola')
    e.preventDefault();
    var href = $(this).attr('href');
    $(href).modal('toggle');

	  $(this).attr("data-toggle","modal");
	  
  });
});  


jQuery(document).ready(function($){

	
$('.more-icon-preocess li:nth-child(1)').on({
     'click': function(){
         
		  $('#img-one').attr('src','http://159.89.229.55/Due-diligence/wp-content/uploads/2021/05/paper-orange.png');
		 $('#img-two').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avion.png');
		 $('#img-three').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avioneta.png');
		 $('#img-four').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/cohete.png');
     }
 });
	
$('.more-icon-preocess li:nth-child(2)').on({
     'click': function(){
         $('#img-two').attr('src','http://159.89.229.55/Due-diligence/wp-content/uploads/2021/05/avion-orange.png');
		  $('#img-one').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/paper.png');
		 $('#img-three').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avioneta.png');
		 $('#img-four').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/cohete.png');
     }
 });
	
	$('.more-icon-preocess li:nth-child(3)').on({
		'click': function(){
			$('#img-three').attr('src','http://159.89.229.55/Due-diligence/wp-content/uploads/2021/05/avioneta-orange.png');
			$('#img-two').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avion.png');
			$('#img-one').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/paper.png');
			
			$('#img-four').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/cohete.png');
		}
	});
	
	$('.more-icon-preocess li:nth-child(4)').on({
		'click': function(){
			$('#img-four').attr('src','http://159.89.229.55/Due-diligence/wp-content/uploads/2021/05/cohete-orange.png');
			 $('#img-three').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avioneta.png');
			$('#img-two').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/avion.png');
			$('#img-one').attr('src','http://159.89.229.55/Due-diligence/wp-content/themes/Due%20diligence/assets/img/paper.png');
			
			
		}
	});

});


/* -------------------------
   -----  Counters -----
   ------------------------- */

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var position = $('#counter-stats').scrollTop()

    if (scroll >= position) {
        $('.counting').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 3000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
    }
});
