	<?php $total_money = 0; ?>
	<div class="container-fluid" id="wraper_wishlist">
		<div class="container wishlist_info">
			<div class="col-md-5">
				<p class="text-left">SẢN PHẨM</p>
			</div>
			<div class="col-md-2">
				<p class="text-left">GIÁ</p>
			</div>
			<div class="col-md-2">
				<p class="text-left">SỐ LƯỢNG</p>
			</div>
			<div class="col-md-3">
				<p class="text-left">THÀNH TIỀN</p>
			</div>
		</div>
		<form action="<?php echo base_url().'Cart/update'; ?>" method="post">
		<?php foreach ($carts as $row): ?>
		<div class="container wishlist">
			<div class="col-md-5">
				<img class="img-responsive wishlist_img" src="<?php echo base_url().'upload/product/'.$row['image_link'];?>">
				<div class="wishlist_product">
					<p class="product_name"><?php echo $row['name'] ?></p>
					<p>LOẠI:</p>
					<p class="product_color"></p>
					<p>XUẤT XỨ:</p>
					<p class="product_size">NewZiland</p>
				</div>
			</div>
			<div class="col-md-2 wish_price"><p><?php echo $row['price'] ?></p></div>
			<div class="col-md-2 wish_stock">
				<input type="number" class="form-control" value="<?php echo $row['qty'] ?>" step="1" name="<?php echo 'qty'.$row['id'] ?>"></input>
			</div>
			<div class="col-md-1 wish_price"><p class="subtotal"><?php echo $row['price']*$row['qty']; ?></p></div>
			<div class="col-md-2 wish_edit">
				<ul>
					<li><a href="<?php echo base_url().'Cart/del/'.$row['id']; ?>" title="">Xóa</a></li>
				</ul>
			</div>
		</div>
		<?php $total_money +=  $row['price']*$row['qty']; ?>
		<?php endforeach; ?>
		<button class="coupon_button" type="submit" style="float: right; margin-right: 80px;">CẬP NHẬT</button>
		</form>
	</div>
	<div class="container wraper_coupon">
		<div class="col-md-6 col-md-offset-6">
			<input class="coupon_input" placeholder="Nhập mã giảm giá" type="text" name="coupon">
			<button class="coupon_button" type="button">ÁP DỤNG</button>
		</div>
	</div>
	<div class="container wraper_subtotal_info">
		<div class="col-md-6 col-md-offset-6 wraper_ship_order">
			<div class="ship_order">
				<div class="ship_order1">
					<p class="ship_order1_info"><?php echo $total_money; ?></p>
					<p class="ship_order1_title">TẠM TÍNH</p>
				</div>
				<div class="ship_order1">
					<p class="ship_order2_info">Miễn phí</p>
					<p class="ship_order2_title">PHÍ VẬN CHUYỂN</p>
				</div>
				<div class="ship_order1">
					<p class="ship_order3_info"><?php echo $total_money; ?></p>
					<p class="ship_order3_title">TỔNG ĐƠN HÀNG</p>
				</div>
			</div>
			<button class="shop_cart_button_order button_1" type="button" onclick="window.open('<?php echo base_url().'Cart/previous'?>');">TIẾP TỤC MUA HÀNG</button>
			<button class="shop_cart_button_order button_2" type="button" onclick="window.open('<?php echo base_url().'Payment/index'?>');">THANH TOÁN</button>
		</div>
	</div>