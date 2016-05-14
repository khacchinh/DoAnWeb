<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!-- left container -->
			<div class="col-md-3 left_col">
				<?php $this->load->view('admin/left'); ?>
			</div>

			<!-- header of page -->
			<div class="top_nav">
				<?php $this->load->view('admin/header'); ?>
			</div>

			<!-- where the code in here -->
			<?php $this->load->view($temp, $this->data); ?>
			<!-- end code here -->

			<!-- footer -->
			<footer class="right_col" style="background: #f7f7f7;">
				<?php $this->load->view('admin/footer'); ?>
			</footer>

		</div>
	</div>
</body>
</html>
