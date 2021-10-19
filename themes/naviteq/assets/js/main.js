(function($) {


var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

if( $('.hamburger-cntlr').length ){
  $('.hamburger-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=767){
    if( $('li.menu-item-has-children > a').length ){
      $('li.menu-item-has-children > a').click(function(e){
       event.preventDefault();
       $(this).next().slideToggle(300);
       $(this).parent().toggleClass('sub-menu-arrow');
     });
    }
}

//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


  var containerWidth = $('.container').width();
  var offSetWidth = (windowWidth - containerWidth);
  var lftOffSetWidth = (offSetWidth / 2);
  var bnrHeight = $('.hm-page-bnr-des-inr').outerHeight();
  $('.hm-page-border').css('width', lftOffSetWidth);
  $('.hm-page-border').css('height', bnrHeight);

  $(window).resize(function(){
    var windowWidth = $(window).width();
    var containerWidth = $('.container').width();
    var offSetWidth = (windowWidth - containerWidth);
    var lftOffSetWidth = (offSetWidth / 2);
    var bnrHeight = $('.hm-page-bnr-des-inr').outerHeight();
    $('.hm-page-border').css('width', lftOffSetWidth);
    $('.hm-page-border').css('height', bnrHeight);
  });

  if (windowWidth > 767) {
    if( $('.hm-page-banner').length ){
      var windowHeight = $(window).height();
      var headerHight = $('.main-header').height();
      var bnrHeight = (windowHeight - headerHight);
      if (windowHeight < 540) {
        $('.hm-page-banner').css('height', bnrHeight);
      }
    }
  }
  

})(jQuery);