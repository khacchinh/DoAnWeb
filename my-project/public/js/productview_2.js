$(document).ready(function($) {
     $("#slide_view_wraper").owlCarousel({
      items :4,
      slideSpeed : 200,
      paginationSpeed : 800,
      rewindSpeed : 1000,
       //Autoplay
      autoPlay : true,
       stopOnHover : false,
     });
     var owl_view=$("#slide_view_wraper");
     $(".next_view").click(function(){
    owl_view.trigger('owl.next');
    });
    $(".pre_view").click(function(){
    owl_view.trigger('owl.prev');
   });
});
$(document).ready(function(){
  $(".shipping_more").hide();
  $(".review_more").hide();
  $(".detail_more_show").addClass("now_button");
});
$(document).ready(function(){
  $(".detail_more_show").click(function(){
    $(".shipping_more").hide();
    $(".review_more").hide();
    $(".detail_more").show();
    $(this).addClass("now_button");
    $(".shiping_more_show").removeClass("now_button");
    $(".review_more_show").removeClass("now_button");
  })
});
$(document).ready(function(){
  $(".review_more_show").click(function(){
    $(".shipping_more").hide();
    $(".detail_more").hide();
    $(".review_more").show();
    $(this).addClass("now_button");
    $(".shiping_more_show").removeClass("now_button");
    $(".detail_more_show").removeClass("now_button");
  })
});
$(document).ready(function(){
  $(".shiping_more_show").click(function(){
    $(".review_more").hide();
    $(".detail_more").hide();
    $(".shipping_more").show();
    $(this).addClass("now_button");
    $(".review_more_show").removeClass("now_button");
    $(".detail_more_show").removeClass("now_button");
  })
});