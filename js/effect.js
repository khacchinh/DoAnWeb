 $('.rating-input').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'lg',
              showClear: false,
              showCaption:false
});
 $(document).ready(function($) {
     $("#mini_slide").owlCarousel({
      slideSpeed : 200,
      paginationSpeed : 800,
      itemsTablet: [768,4],
      rewindSpeed : 1000,
       //Autoplay
      autoPlay : true,
       stopOnHover : false,
     });
     var owl=$("#mini_slide");
     $(".next_logo").click(function(){
    owl.trigger('owl.next');
    });
    $(".pre_logo").click(function(){
    owl.trigger('owl.prev');
   });
});
$(document).ready(function() {
      $("#slide_blog").owlCarousel({
      slideSpeed : 800,
      autoPlay : true,
      paginationSpeed : 800,
      singleItem : true
      });
      var owl_blog=$("#slide_blog");
      $(".next_blog").click(function(){
    owl_blog.trigger('owl.next');
    });
    $(".pre_blog").click(function(){
    owl_blog.trigger('owl.prev');
   });
});
 $(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('#back_top').fadeIn();
    } else {
      $('#back_top').fadeOut();
    }
  });
  $('#back_top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
});
 var value =1;
$(document).ready(function(){
  $(".value_number").text(value);
});
$(document).ready(function(){
  $(".add_button").click(function(){
    value+=1;
    $(".value_number").text(value);
  });
  $(".sub_button").click(function(){
    if($(".value_number").eval()>=1){
      value-=1;
    $(".value_number").text(value);
  }
  });
});