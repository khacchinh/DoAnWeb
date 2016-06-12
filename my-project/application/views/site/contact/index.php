<div id="googleMap" style="width:100%;height:380px;"></div>
	<div class="container-fluid" id="wraper_contact">
		<div class="container">
			<div class="col-md-8">

				<?php if(isset($message) && $message):?>
				<div>
				     <p><strong>Thông báo: </strong><?php echo $message; ?></p>
				</div>
				<?php endif;?>

				<form action="<?php echo  base_url().'/Contact_Requird_Customer/addRequird' ?>" method="post" accept-charset="utf-8">
					<p style="padding-top: 20px;color:#818181">Họ và Tên:</p>
					<input class="full_width nomarl" type="text" name="name" value="" placeholder="" required="">
					<p style="padding-top: 20px;color:#818181">Email:</p>
					<input class="full_width nomarl" type="email" name="email" value="" placeholder="" required="">
					<p style="padding-top: 20px;color:#818181">Tiêu đề:</p>
					<input class="full_width nomarl" type="text" name="subject" value="" placeholder="" required="">
					<p style="padding-top: 20px;color:#818181">Nội dung:</p>
					<textarea class="col-lg-12"  id="mess"  name="mess" required=""></textarea>
					<br>
					<input id="sub" type="submit" style="background-color: #e04144" name="send" value="LƯU THÔNG TIN YÊU CẦU">
				</form>
			</div>
			<div class="col-md-4">
				<h6 style="margin-top:50px;font-size:20px; ">THÔNG TIN LIÊN HỆ</h6>
				<p style="color:#878787;">
					Mọi chi tiết và mua hàng xin liên hệ với Nguyễn Thị Ngọc Bông
				<p style="color:#878787;">
					<strong>phone:</strong><br>
				    01675245236
				    <br>
				</p>
			</div>
		</div>
	</div>