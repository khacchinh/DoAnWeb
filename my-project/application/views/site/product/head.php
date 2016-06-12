	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home1</title>


	<link href="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/bootstrap-3.3.6/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/animate/animate.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/plugins/star-rating/css/star-rating.css"  type="text/css"/>
	<link rel="stylesheet" href="<?php echo public_url()?>/css/style.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/css/shop_grid.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/css/productview_2.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/css/jquery.simpleLens.css">
	<link rel="stylesheet" href="<?php echo public_url()?>/css/jquery.simpleGallery.css">
	

	<script src="<?php echo public_url()?>/plugins/bootstrap-3.3.6/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/jquery/jquery-2.2.2.min.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo public_url()?>/plugins/star-rating/js/star-rating.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/effect.js"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/productview_2.js"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/jquery.simpleGallery.js"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/jquery.simpleLens.js"></script>

	<script>
	    $(document).ready(function(){
	        $('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
	            loading_image: 'demo/images/loading.gif'
	        });

	        $('#demo-1 .simpleLens-big-image').simpleLens({
	            loading_image: 'demo/images/loading.gif'
	        });
	    });
	</script>

	<script>
	    $(document).ready(function(){
	        $('#demo-2 .simpleLens-thumbnails-container img').simpleGallery({
	            loading_image: 'demo/images/loading.gif',
	            show_event: 'click'
	        });

	        $('#demo-2 .simpleLens-big-image').simpleLens({
	            loading_image: 'demo/images/loading.gif',
	            open_lens_event: 'click'
	        });
	    });
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#txt_comm').keypress(function(event){
				if (event.keyCode == 13){
					if ($('#name').val() != ""){
					$.ajax({
				        type: 'POST',
				        url: '<?php echo base_url().'/Ajax/do_comment' ?>',
				        data: {product_id:'<?php echo $info->id; ?>', content: $('#txt_comm').val(), name: $('#name').val() },
				        success:function(response){
				        	result=response.split('~');
				        	if (result.length > 1){
					        	var main = $("<div class='content_comment'></div>");
					            var img = $("<img src='<?php echo public_url() ?>/img/avatar.png'></img>").text("Text.");
					            var comm_contain = $("<div class='comment_contain'><div/>");
					            var comm_name = $("<p class = 'comment_name'></>").text(result[0]);
					            var comm_time = $("<p class = 'comment_time'></>").text(result[2]);
					            var comm_content = $("<p class = 'comment_content'></>").text(result[1]);
					            var comm_rating = $("<div class='rating'><div/>");
					            var start1 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start2 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start3 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start4 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start5 = $("<span class='glyphicon glyphicon-star-empty' ></span>");
					            comm_rating.append(start1, start2, start3, start4, start5);
					            comm_contain.append(comm_name, comm_time, comm_content, comm_rating);
					            main.append(img, comm_contain);
					            $('#div_comment').append(main);
					            $('#info_comment').text("<?php echo (intval(count($comment)) + 1) ?> REVIEW(S) FOR <?php echo $info->name; ?> /");
				        	}
				        	else $('#txt_comm').val('Co loi xay ra!!');
				    	}
					});
					}
					else alert("Bạn chưa nhập tên!");
				}	
			});
		});
	</script>