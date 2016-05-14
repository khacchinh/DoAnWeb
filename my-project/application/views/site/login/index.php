<!-- Content -->
	<div class="container-fluid login_wraper">
		<div class="container">
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
				<form action="" method="POST" role="form">
					<legend class="login_title">ĐĂNG NHẬP</legend>
				
					<div class="form-group login_input">
						<label for="">EMAIL</label>
						<input type="text" class="form-control login_email" name="email" placeholder="Email của bạn" required="required">
						<label for="">MẬT KHẨU</label>
						<input type="password" name="password" class="form-control login_pass" required="required" >
					</div>
					<h5 style="color: red;"> <?php echo form_error('login');?> </h5>
					<button type="submit" class="btn btn-primary input_submit">ĐĂNG NHẬP</button>
					<a class="qmk" href="#">Quên mật khẩu?</a>
				</form>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-offset-2 ">
				<p class="login_title_2" >ĐĂNG KÝ MỚI</p>
				<p class="signup_content">Nếu bạn chưa là thành viên của website freshfruit. Hãy đăng ký để làm thành viên của website, và được nhận nhiều ưu đãi hơn.</p>
				<a type="submit" class="btn btn-primary input_submit_2" href="<?php echo base_url(). 'signup'?>">ĐĂNG KÝ MỚI</a>
			</div>
		</div>
	</div>