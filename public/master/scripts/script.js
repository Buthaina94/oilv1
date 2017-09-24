$( document ).ready(function() {


/*Change language to load proper stylesheets*/
 $('#ar_lang').on("click", function (e) {
    e.preventDefault();
    $('#ar_style').prop('disabled', false);
    $('#ar_lang').hide();
    $('#en_lang').show();
 });

 $('#en_lang').on("click", function (e) {
    e.preventDefault();
    $('#ar_style').prop('disabled', true);
    $('#en_lang').hide();
    $('#ar_lang').show();
 });


/*slim scroller*/
   $(".scroller").mCustomScrollbar({
            theme:"dark-3",
    });

 

/*Navigation dropdown items*/
 $('.dropdown > a').on("click", function (e) {
    e.preventDefault();
    $('.drop_items').not($(this).parent('li').find('.drop_items')).fadeOut('fast');
    $(this).find('.arrow').toggleClass('clicked');
    $(this).parent('li').find('.drop_items').slideToggle(500);
 });

/*swiper home slider*/

var swiper = new Swiper('.home_slider', {
    pagination: '.home_slider .swiper-pagination',
    paginationClickable: true,
    effect:'fade',
    autoHeight:true,
    autoplay: 7000,
    autoplayDisableOnInteraction: false,
    // // Navigation arrows
    nextButton: '.home_slider .swiper-button-next',
     prevButton: '.home_slider .swiper-button-prev',
  });

/*swiper subscribers words slider*/
var swiper = new Swiper('.subscribers_slider', {
    pagination: '.subscribers_slider .swiper-pagination',
    paginationClickable: true,
    effect:'swipe',
    autoHeight:true,
    autoplay: 7000,
    autoplayDisableOnInteraction: false,
    
  });

/*swiper subscribers words slider*/
var swiper = new Swiper('.packages_slider', {
    pagination: '.packages_slider .swiper-pagination',
    paginationClickable: true,
    effect:'swipe',
    autoHeight:true,
    autoplay: 7000,
    autoplayDisableOnInteraction: false,
    
  });
/*Image/Video Tabs*/
 $('#show_img_gal').on("click", function (e) {
        e.preventDefault();
        $('.tabs_link a').removeClass('active');
        $(this).addClass('active');

        $('.video_gallery').fadeOut(500);
        $('.image_gallery').fadeIn(500)
    });
 $('#show_vid_gal').on("click", function (e) {
        e.preventDefault();
        $('.tabs_link a').removeClass('active');
        $(this).addClass('active');
        $('.image_gallery').fadeOut(500);
        $('.video_gallery').fadeIn(500)
    });

/*Questions Toggle*/
 $('.questions ul li a').on("click", function (e) {
        e.preventDefault();
        $(this).parent().find('.answer').slideToggle('fast');
        $(this).parent('li').toggleClass('open');
    });

   if ($('#map-canvas').length > 0) {

 /*GOOGLE MAP*/
 function initialize() {

    var LatLng = new google.maps.LatLng(23.890019, 45.078303);

    var mapOptionsBel = {

        zoom: 8,

        center: LatLng,

        mapTypeControl: false,

        streetViewControl: false,

        panControl: false,

    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptionsBel);
    google.maps.event.addDomListener(window, "resize", function () {

        google.maps.event.trigger(map, "resize");

    });

   
    map.setCenter(LatLng);
    

    var marker = new google.maps.Marker({

        map: map,

        position: new google.maps.LatLng(23.890019, 45.078303),

    });

    

    }

google.maps.event.addDomListener(window, 'load', initialize);

}
/*Timer*/
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

  /* date = month/day/year */
  if ($('#timer').length > 0) {
      var deadline = new Date('12/5/2017');
      initializeClock('timer', deadline);
  }


/*Image lightslider*/
if ($('#gallery-thumbnails').length > 0) {

$('#gallery-thumbnails').lightGallery({
    thumbnail:true
});
}
  /*Contact Form select change*/
  $('.highlighted_select').on('change', function() {
    $('.contact_forms .form').hide();
    $("."+this.value).show();
});


/*Mobile menu toggle*/
 $('.mob_menu').on('click', function(e) {
    e.preventDefault();
    $('.menu').slideToggle(500);

 });



$(document).on('submit','form.sign_form',function(e){
  e.preventDefault();
  $('.alert-error1,.black_overlay').fadeIn(500);
});
$(document).on('submit','form.contact_form',function(e){
  e.preventDefault();
  $('.alert-success,.black_overlay').fadeIn(500);
});
  $('.alert .close_alert').on('click', function(e) {
    e.preventDefault();
    $('.alert,.black_overlay').fadeOut(500);

 });

$('#forget_password_btn').on('click', function(e) {
    e.preventDefault();
    $('.forget_popup,.black_overlay').fadeIn(500);

 });
$(document).on('submit','form.forgot_password_form',function(e){
  e.preventDefault();
  $('.forget_popup').fadeOut(500);
  $('.alert-success').fadeIn(500);
});


  /*
  By Osvaldas Valutis, www.osvaldas.info
  Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
  var inputs = document.querySelectorAll( '.inputfile' );
  Array.prototype.forEach.call( inputs, function( input )
  {
    var label  = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
      var fileName = '';
      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else
        fileName = e.target.value.split( '\\' ).pop();

      if( fileName )
        label.querySelector( 'span' ).innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
    input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
  });
}( document, window, 0 ));
});
