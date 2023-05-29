$(document).ready(function(){
    
  $(window).scroll(function() {
    var scrollPositions = $(this).scrollTop();
    
    if (scrollPositions >= 0 && scrollPositions <= 150) {
      $('.element1').addClass('active');
    } else {
      $('.element1').removeClass('active');
    }
  
    if (scrollPositions >= 400 && scrollPositions <= 900) {
      $('.element2').addClass('active fadeInUp animated');
    } else {
      $('.element2').removeClass('active fadeInUp animated');
      // $('.element2').addClass('active fadeInDown animated');
    }

    if (scrollPositions >= 1000 && scrollPositions <= 2000) {
      $('.element3').addClass('active fadeInUp animated');
    } else {
      $('.element3').removeClass('active fadeInUp animated');
      
    }

    if (scrollPositions >= 2000 && scrollPositions <= 3000) {
      $('.element4').addClass('active fadeInUp animated');
    } else {
      $('.element4').removeClass('active fadeInUp animated');
    }

    if (scrollPositions >= 2900 && scrollPositions <= 4000) {
      $('.element5').addClass('active fadeInUp animated');
    } else {
      $('.element5').removeClass('active fadeInUp animated');
    }


    if (scrollPositions >= 1100 && scrollPositions <= 2100) {
      $('.element8').addClass('active fadeInUp animated');
    } else {
      $('.element8').removeClass('active fadeInUp animated');
    }

    if (scrollPositions >= 450 && scrollPositions <= 950) {
      $('.element33').addClass('active fadeInUp animated');
    } else {
      $('.element33').removeClass('active fadeInUp animated');
    }
   

    if (scrollPositions >= 4500 && scrollPositions <= 5000) {
      $('.element40').addClass('active fadeInUp animated');
    } else {
      $('.element40').removeClass('active fadeInUp animated');
    }
   
    if (scrollPositions >= 3000 && scrollPositions <= 4000) {
      $('.element55').addClass('active fadeInUp animated');
    } else {
      $('.element55').removeClass('active fadeInUp animated');
    }

    
  });






  // add animation
  $('.fade-in').each(function(){        
        
    if(isScrolledIntoView($(this))){        
        $(this).css({
            'opacity':1,
            'visibility':'visible'
        });
    }
    
    else{
        $(this).css({
            'opacity':0,
            'visibility':'hidden'
        });
    }

  })
})