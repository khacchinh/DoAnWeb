<!-- Content -->
	<div class="container-fluid login_wraper">
		<form action="" method="POST" role="form" class="container">
			<legend class="signup_title text-center">ĐĂNG KÝ</legend>
		
			<div class="form-group login_input">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
						<label for="">HỌ TÊN</label>
						<input type="text" class="form-control login_name " name="name" placeholder="HỌ TÊN" required="required">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<label for="">MẬT KHẨU</label>
						<input type="password" name="password" class="form-control login_pass " required="required" title="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
						<label for="">EMAIL</label>
						<input type="email" class="form-control login_email " name="email" placeholder="Email của bạn" required="required">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<label for="">XÁC NHẬN MẬT KHẨU</label>
						<input type="password" name="re_password" class="form-control login_pass " required="required">
					</div>
				</div>	
				<p class="col-lg-offset-2"><strong>THÔNG TIN THÊM:</strong></p>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
						<label for="">Số điện thoại</label>
					<input type="text" name="phone"  class="form-control login_pass ">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
						<label for="">Địa chỉ</label>
						<input type="text" name="address" class="form-control login_pass ">
					</div>
				</div>
				<?php $this->load->view('site/message', $this->data); ?>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 ">
						<button type="submit" style="float: right;"  class="btn btn-primary input_submit">ĐĂNG KÝ</button>
					</div>
				</div>
			</div>
		</form>
	</div>	