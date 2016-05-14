<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view($head); ?>
</head>
<body>
	<!-- small header -->
	<?php $this->load->view('site/header', $this->data); ?>

	<!-- slide -->
	<?php 
		if (isset($slide) && $slide == true)
			$this->load->view('site/slide');
	?>

	<!-- mini menu -->
	<?php $this->load->view('site/mini-menu'); ?>

	<!--This is site index --> 
	<?php $this->load->view($temp, $this->data); ?>
	<!-- end of index (main site)-->

	<div class="social container-fluid">
		<?php $this->load->view('site/social'); ?>
	</div>

	<!-- footer-->
	<footer>
		<?php $this->load->view('site/footer'); ?>
	</footer>
</body>
</html>