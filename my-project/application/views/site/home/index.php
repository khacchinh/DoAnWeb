	<script type="text/javascript">
		function buy_item(id){
			$.ajax({
		        type: 'POST',
		        url: '<?php echo base_url().'/Ajax/buy_item' ?>',
		        data: { id:id },
		        success:function(response){
		            $('#count_item').html(response);
		            alert('Sản phẩm đã nằm trong giỏ hàng');
		        }
			});
		};
	</script>

	<div class="container-fluid product_row">
		<div class="container">
			<?php if (count($homes) > 4 ): ?>
				<?php for ($i = 0 ; $i < 4 ; $i++):?>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product">
					<div class="product_img">
						<img src="<?php echo base_url('upload/product/'.$homes[$i]->image_link) ?>" class="img-responsive">
					</div>
					<div class="product_info">
						<p class="product_name"><?php echo $homes[$i]->name; ?></p>
					</div>
					<div class="product_price">
						<p class="price"><strong><?php echo $homes[$i]->price; ?></strong></p>
					</div>
					
					<div class="rating">
						<input value="5" type="number" class="rating rating-input" min=0 max=5 step=0.2 data-size="sm">
					</div>

					<div class="product_index">
						<img width="23px" height="95px" src="<?php echo public_url() ?>/img/label/moi.jpg" class="img-responsive">
					</div>
					<div class="hover_product">
						<p class="text-center"><button class="hover_button" type="button" onclick = "buy_item('<?php echo $homes[$i]->id ?>')">MUA NGAY</button></p>
						<p class="text-center"><button class="hover_button" type="button" onclick="window.open('<?php echo base_url().'Product/view/'.$homes[$i]->id; ?>', '_blank');">XEM</button></p>
					</div>
				</div>
				<?php endfor; ?>
			<?php else: ?>
				<?php for ($i = 0 ; $i < count($homes); $i++):?>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product">
					<div class="product_img">
						<img src="<?php echo base_url('upload/product/'.$homes[$i]->image_link) ?>" class="img-responsive">
					</div>
					<div class="product_info">
						<p class="product_name"><?php echo $homes[$i]->name; ?></p>
					</div>
					<div class="product_price">
						<p class="price"><strong><?php echo $homes[$i]->price; ?></strong></p>
					</div>
					
					<div class="rating">
						<input value="5" type="number" class="rating rating-input" min=0 max=5 step=0.2 data-size="sm">
					</div>

					<div class="product_index">
						<img width="23px" height="95px" src="<?php echo public_url() ?>/img/label/moi.jpg" class="img-responsive">
					</div>
					<div class="hover_product">
						<p class="text-center"><button class="hover_button" type="button" onclick = "buy_item('<?php echo $homes[$i]->id ?>')">MUA NGAY</button></p>
						<p class="text-center"><button class="hover_button" type="button" onclick="window.open('<?php echo base_url().'Product/view/'.$homes[$i]->id; ?>', '_blank');">XEM</button></p>
					</div>
				</div>
				<?php endfor; ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="container-fluid product_row">
		<div class="container">
			<?php for ($i = 4 ; $i < count($homes) ; $i++):?>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product">
					<div class="product_img">
						<img src="<?php echo base_url('upload/product/'.$homes[$i]->image_link) ?>" class="img-responsive">
					</div>
					<div class="product_info">
						<p class="product_name"><?php echo $homes[$i]->name; ?></p>
					</div>
					<div class="product_price">
						<p class="price"><strong><?php echo $homes[$i]->price; ?></strong></p>
					</div>
					
					<div class="rating">
						<input value="5" type="number" class="rating rating-input" min=0 max=5 step=0.2 data-size="sm">
					</div>

					<div class="product_index">
						<img width="23px" height="95px" src="<?php echo public_url() ?>/img/label/moi.jpg" class="img-responsive">
					</div>
					<div class="hover_product">
						<p class="text-center"><button class="hover_button" type="button" onclick = "buy_item('<?php echo $homes[$i]->id ?>')">MUA NGAY</button></p>
						<p class="text-center"><button class="hover_button" type="button" onclick="window.open('<?php echo base_url().'Product/view/'.$homes[$i]->id; ?>','_blank');">XEM</button></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>

	

	<div class="container tran_wraper">
		<p class="text-center tran_top_title">Giao hàng tận nơi thật đơn giản</p>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 tran_col">
			<img class="tran_img" alt="" src="<?php echo public_url() ?>/img/callicon.png">
			<p class="tran_title text-center">ĐẶT HÀNG</p>
			<p class="tran_info text-center">Qua phone, facebook hay website.Họ tên, số dt, địa chỉ..Sản phẩm 1, số lượng Sản phẩm 2, số lượng…Giờ giao hàng</p>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 tran_col">
			<img class="tran_img" alt="" src="<?php echo public_url() ?>/img/shipicon.png">
			<p class="tran_title text-center">ĐẶT HÀNG</p>
			<p class="tran_info text-center">Free ship cho đơn hàng trên 500k, quận 1, 3.<br>
				20k cho đơn hàng ở quận 4, 5, 10, 11, Bình Thạnh,
				Gò Vấp, Phú Nhuận, Tân Bình, Tân Phú, Bình Tân. <br>
				30k cho đơn hàng quận 2, 6, 7, 8, 9, 12, Thủ Đức</p>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 tran_col">
			<img class="tran_img" alt="" src="<?php echo public_url() ?>/img/moneyicon.png">
			<p class="tran_title text-center">ĐẶT HÀNG</p>
			<p class="tran_info text-center">Qua phone, facebook hay website.Họ tên, số dt, địa chỉ..Sản phẩm 1, số lượng Sản phẩm 2, số lượng…Giờ giao hàng</p>
		</div>
	</div>

	<div class="container menu_control">
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
			<p>SẢN PHẨM BÁN CHẠY</p>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-2 control_icon">
			<span class="glyphicon glyphicon-chevron-right next_logo"></span>
			<span class="glyphicon glyphicon-chevron-left pre_logo"></span>
		</div>
	</div>

	<div id="mini_slide" class="owl-carousel container">

		<!-- code database here -->
		<?php foreach ($list as $list[$i]):?>
	        <div class="item">
	          <a href="<?php echo base_url().'Product/view/'.$list[$i]->id; ?>"><img class="mini_slide_img img-responsive" src="<?php echo base_url('upload/product/'. $list[$i]->image_link)?>"></a>
	        </div>
	    <?php endforeach; ?>
     </div>

      <div class="container-fluid blog">
				<div class="container menu_control">
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
						<p>THÔNG TIN DINH DƯỠNG VÀ SỨC KHỎE</p>
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-2 control_icon">
						<span class="glyphicon glyphicon-chevron-right next_blog"></span>
						<span class="glyphicon glyphicon-chevron-left pre_blog"></span>
					</div>
				</div>
				<div id="slide_blog" class="container owl-carousel">
					<div class="item">
						<div class=" blog_img_slide col-xs-9 col-sm-9 col-md-9 col-lg-6">
							<img class="slide_blog_img" src="<?php echo public_url()?>/img/blog/occho.jpg">
						</div>
						<div class="blog_content_slide col-xs-9 col-sm-9 col-md-9 col-lg-6">
							<p><h4>QUẢ ÓC CHÓ MUA Ở ĐÂU UY TÍN? QUẢ ÓC CHÓ CÓ TÁC DỤNG GÌ?</h4></p>
							<p class="text_time">Ngày 1 Tháng  4 Năm 2016</p>
							<br>
							<br>
							<p class="text_content">Quả óc chó là loại quả quý không phải ở đâu cũng trồng được nó phụ thuộc rất nhiều vào khí hậu và môi trường tự nhiên như đất đai màu mỡ, thảm thực vật tươi tốt. Hiện nay thì Mỹ là nước trồng quả óc chó đứng đầu thế giới cả về chất lượng [...]</p>
							<a href="#"><button type="button" class="read_more">ĐỌC THÊM</button></a>
						</div>
					</div>
					<div class="item">
						<div class=" blog_img_slide col-xs-9 col-sm-9 col-md-9 col-lg-6">
							<img class="slide_blog_img" src="<?php echo public_url()?>/img/blog/matong.jpg">
						</div>
						<div class="blog_content_slide col-xs-9 col-sm-9 col-md-9 col-lg-6">
							<p><h4>TÁC DỤNG CỦA MẬT ONG ĐỐI VỚI SỨC KHỎE</h4></p>
							<p class="text_time">Ngày 1 Tháng  4 Năm 2016</p>
							<br>
							<br>
							<p class="text_content">Lợi ích của mật ong đối với sức khỏe con người đã được thừa nhận ở nhiều nền văn hóa qua nhiều thế kỷ. Mật ong nguyên chất là một trong những thực phẩm mang tính chất của một vị thuốc dễ ăn nhất, và cung cấp nhiều dưỡng chất thiên nhiên cho cơ thể. […]</p>
							<a href="#"><button type="button" class="read_more">ĐỌC THÊM</button></a>
						</div>
					</div>
				</div>
			</div>