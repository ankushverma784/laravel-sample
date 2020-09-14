// partners slider
$('.ourpartners').slick({
  dots: false,
  infinite: false,
  arrows: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


// testimonal slider
$('.clientreview').slick({
  dots: true,
  arrows: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  infinite:true,
  cssEase: 'linear',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


// tour package
 $('.tourpackage-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots:false,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  asNavFor: '.tourpackage-nav'
});

$('.tourpackage-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  asNavFor: '.tourpackage-slider',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});


$('.banner-slider').slick({
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2400,
  fade: true,
  infinite:true,
  dots:true,
  arrows:true,
  cssEase: 'linear',
});
  

// back to top
$(document).ready(function($){
    $(window).scroll(function(){
        
        if ($(this).scrollTop() > 600) {
            $('.backtotop a').css("display","block");
        } else {
            $('.backtotop a').css("display","none");
        }
    });
    $('.backtotop a').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});



// fixed map
$(document).ready(function($){
    $(window).scroll(function(){
        
        if ($(this).scrollTop() > 300) {
            $('.fixedmap').css("display","inline-grid");
        } else {
            $('.fixedmap').css("display","none");
        }
    });
});

// Tweets
$('.tweetsreview').slick({
  dots: true,
  arrows: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
  ]
});

// cursor pointer
$(document).ready(function() {
  $(".search-popup").mousemove(function(event){            
    var relX = event.pageX - $(this).offset().left;
    var relY = event.pageY - $(this).offset().top;
    var relBoxCoords = "(" + relX + "," + relY + ")";
    $('.pointer-tranform').css('left',relX);
    $('.pointer-tranform').css('top',relY);
  });

  $("#searchbtn-open").click(function(){
    $('#searchbtn').css('display','block');
  });


  $("#searchbtn").click(function(){
    $(this).css('display','none');
  });

  $( ".search-body" ).click(function( event ) {
    event.stopPropagation();
  });

var t = $(document).width();
    if (t < 768) {
       $('.smhide-collapse').removeClass('show');
    } else {
       $('.smhide-collapse').addClass('show');
   };


dragElement(document.getElementById("advertisement-btn"));
var el = document.getElementById('advertisement-btn'); 
el.addEventListener("touchstart", dragElement(document.getElementById("advertisement-btn")), true);
el.addEventListener("touchmove", dragElement(document.getElementById("advertisement-btn")), true);

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

$(document).ready(function($){
    $(window).scroll(function(){
        
        if ($(this).scrollTop() > 600) {
            $('#advertisement-btn').css("opacity","1");
        } else {
            $('#advertisement-btn').css("opacity","0");
        }
    });
  });

  $("#advertisement-info").click(function(){
    if($('.advertisement-img').hasClass('hide-adimg')){
      $(".advertisement-img").addClass('show-adimg');
    }else{
      $(".advertisement-img").removeClass('hide-adimg');
      $(".advertisement-img").addClass('show-adimg');
    }
    
  });

  $("#min-btn").click(function(){
    if($('.advertisement-img').hasClass('show-adimg')){
      $(".advertisement-img").addClass('hide-adimg');
      $(".advertisement-img").removeClass('show-adimg');
    }else{
      $(".advertisement-img").removeClass('hide-adimg');
      $(".advertisement-img").addClass('show-adimg');
    }
  });



  // $(".tourType").hover(function(){
  //   if($('.tourfor').hasClass('hide-tourtype')){
  //     $(".tourfor").addClass('show-tourtype');
  //     $(".tourfor").removeClass('hide-tourtype');
  //   }else{
  //     $(".tourfor").removeClass('show-tourtype');
  //     $(".tourfor").addClass('hide-tourtype');
  //   }
  // });


  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

  var header = document.getElementById('site-header');

  var checkScroll = function() {

    /*
    ** Find the direction of scroll
    ** 0 - initial, 1 - up, 2 - down
    */

    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) { 
      //scrolled up
      direction = 2;
    }
    else if (curScroll < prevScroll) { 
      //scrolled down
      direction = 1;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }
    
    prevScroll = curScroll;
  };

  var toggleHeader = function(direction, curScroll) {
    if (direction === 2 && curScroll > 52) { 
      
      //replace 52 with the height of your header in px

      header.classList.add('hide');
      prevDirection = direction;
    }
    else if (direction === 1) {
      header.classList.remove('hide');
      prevDirection = direction;
    }
  };
  
  window.addEventListener('scroll', checkScroll);

})


// price slider

var limitSlider = document.getElementById('rangeslider');

noUiSlider.create(limitSlider, {
    start: [30, 150],
    behaviour: 'drag',
    connect: true,
    range: {
        'min': 0,
        'max': 200
    }
});

var limitFieldMin = document.getElementById('range-slider-value-min');
var limitFieldMax = document.getElementById('range-slider-value-max');

limitSlider.noUiSlider.on('update', function (values, handle) {
    (handle ? limitFieldMax : limitFieldMin).innerHTML = values[handle];
});

// counter js
$('.counter').counterUp({
    delay: 10,
    time: 1000
});
