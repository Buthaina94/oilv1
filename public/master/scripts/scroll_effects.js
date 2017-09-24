$( document ).ready(function() {

/*number counter*/
var a = 0;
  if($(window).scrollTop()>=$('.next_exhibition').offset().top-200){
        countTo = $('.count').attr('data-count');
        $({
        countNum: $('.count').text()
        }).animate({countNum: countTo},
        {
            duration: 1000,
              easing: 'swing',
              step: function() {
                $('.count').text(Math.floor(this.countNum));
              },
            complete: function() {
            $('.count').text(this.countNum);
            //alert('finished');
          }
     });
    a = 1;
  }


   $(window).scroll(function(){
    if($(window).scrollTop()>=$('.next_exhibition').offset().top-200){
    
     $('.next_exhibition .title_line').addClass('drawlines');

        countTo = $('.count').attr('data-count');
        $({
        countNum: $('.count').text()
        }).animate({countNum: countTo},
        {
            duration: 1000,
              easing: 'swing',
              step: function() {
                $('.count').text(Math.floor(this.countNum));
              },
            complete: function() {
            $('.count').text(this.countNum);
            //alert('finished');
          }
     });
    a = 1;
  }
  if($(window).scrollTop()>=$('.content.latest_exhibitions').offset().top-500){
                $('.halfWidthList').find('li').each(function(i){
                    var row = $(this);
                    setTimeout(function() {
                        row.addClass('animate');
                    }, 200*i);

                });
            }
    if($(window).scrollTop()>=$('.mediabnner').offset().top-500){
    
     $('.mediabnner .title_line').addClass('drawlines');
     
}
 
     if($(window).scrollTop()>=$('.mediabnner').offset().top-100){
    $('.gallery_list').find('li').each(function(i){
                    var row = $(this);
                    setTimeout(function() {
                        row.addClass('animate');
                    }, 200*i);

                });

}

   if($(window).scrollTop()>=$('.pricing').offset().top-100){
    $('.pricing').find('.package').each(function(i){
                    var row = $(this);
                    setTimeout(function() {
                        row.addClass('animate');
                    }, 00*i);

                });

}


  if($(window).scrollTop()>=$('.newsSection').offset().top-200){
    
     $('.newsSection .title_line').addClass('drawlines');
          $('.card').addClass('animate');

}
  if($(window).scrollTop()>=$('.questions').offset().top-200){
    
     $('.questions .title_line').addClass('drawlines');
}
  if($(window).scrollTop()>=$('.subscribers').offset().top-200){
    
     $('.subscribers .title_line').addClass('drawlines');
}
  if($(window).scrollTop()>=$('.pricing').offset().top-200){
    
     $('.pricing .title_line').addClass('drawlines');
}
 if($(window).scrollTop()>=$('.sponsers').offset().top-200){
    
     $('.sponsers .title_line').addClass('drawlines');
}
 });
});