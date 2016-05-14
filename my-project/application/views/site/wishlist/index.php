<!-- Content -->
	<div class="container-fluid" id="wraper_wishlist">
				<div class="container wishlist_info">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-5">
						<p class="text-left">SẢN PHẨM</p>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
						<p class="text-left">GIÁ</p>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-5">
						<p class="text-left">TRẠNG THÁI</p>
					</div>
				</div>
				<?php foreach ($carts as $row): ?>
				<div class="container wishlist">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-5">
						<img class="img-responsive wishlist_img" src="<?php echo base_url('upload/product/'.$row['image_link']) ?>">
						<div class="wishlist_product">
							<p class="product_name"><?php echo $row['name']; ?></p>
							<p>LOẠI:</p>
							<p class="product_color">Nhập Khẩu</p>
							<p>XUẤT XỨ:</p>
							<p class="product_size">NewZiland</p>
						</div>
					</div> 
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 wish_price"><p><?php echo $row['price']; ?></p></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 wish_stock"><p>Còn hàng</p></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 wish_edit">
						<ul>
							<li><a href="#" title="">Sửa /</a></li>
							<li><a href="#" title="">Xóa</a></li>
						</ul>
					</div>
				</div>
				<?php endforeach; ?>
	</div>
