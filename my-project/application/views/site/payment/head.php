	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home1</title>
	<!-- Plugin -->
	<!-- Owl Carousel Assets -->
	
	<link href="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/bootstrap-3.3.6/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/animate/animate.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/star-rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo public_url()?>/css/style.css">

	<style type="text/css">
		body {
		    margin-top:40px;
		}
		.stepwizard-step p {
		    margin-top: 10px;
		}
		.stepwizard-row {
		    display: table-row;
		}
		.stepwizard {
		    display: table;
		    width: 50%;
		    position: relative;
		}
		.stepwizard-step button[disabled] {
		    opacity: 1 !important;
		    filter: alpha(opacity=100) !important;
		}
		.stepwizard-row:before {
		    top: 14px;
		    bottom: 0;
		    position: absolute;
		    content: " ";
		    width: 100%;
		    height: 1px;
		    background-color: #ccc;
		    z-order: 0;
		}
		.stepwizard-step {
		    display: table-cell;
		    text-align: center;
		    position: relative;
		}
		.btn-circle {
		    width: 30px;
		    height: 30px;
		    text-align: center;
		    padding: 6px 0;
		    font-size: 12px;
		    line-height: 1.428571429;
		    border-radius: 15px;
		}
	</style>
	
	<script src="<?php echo public_url()?>/plugins/jquery/jquery-2.2.2.min.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/bootstrap-3.3.6/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo public_url()?>/plugins/star-rating/js/star-rating.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/effect.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		  var navListItems = $('div.setup-panel div a'),
		          allWells = $('.setup-content'),
		          allNextBtn = $('.nextBtn');

		  allWells.hide();

		  navListItems.click(function (e) {
		      e.preventDefault();
		      var $target = $($(this).attr('href')),
		              $item = $(this);

		      if (!$item.hasClass('disabled')) {
		          navListItems.removeClass('btn-primary').addClass('btn-default');
		          $item.addClass('btn-primary');
		          allWells.hide();
		          $target.show();
		          $target.find('input:eq(0)').focus();
		      }
		  });

		  allNextBtn.click(function(){
		      var curStep = $(this).closest(".setup-content"),
		          curStepBtn = curStep.attr("id"),
		          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		          curInputs = curStep.find("input[type='text'],input[type='url']"),
		          isValid = true;

		      $(".form-group").removeClass("has-error");
		      for(var i=0; i<curInputs.length; i++){
		          if (!curInputs[i].validity.valid){
		              isValid = false;
		              $(curInputs[i]).closest(".form-group").addClass("has-error");
		          }
		      }

		      if (isValid)
		          nextStepWizard.removeAttr('disabled').trigger('click');
		  });

		  $('div.setup-panel div a.btn-primary').trigger('click');
		});
	</script>