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
	<link rel="stylesheet" href="<?php echo public_url()?>/css/contact.css">
	
	<script src="<?php echo public_url()?>/plugins/jquery/jquery-2.2.2.min.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/bootstrap-3.3.6/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo public_url()?>/plugins/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo public_url()?>/plugins/star-rating/js/star-rating.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo public_url()?>/js/effect.js"></script>
	<script
		src="http://maps.googleapis.com/maps/api/js">
	</script>
	<script>
	var myCenter=new google.maps.LatLng(10.8700488,106.8035911);
	function initialize() {
			var mapProp = {
		  	center: myCenter,
		 	zoom:17,
		  	mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			 var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
			 var marker=new google.maps.Marker({
	 			position:myCenter,
	 		 });
	 		 marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>