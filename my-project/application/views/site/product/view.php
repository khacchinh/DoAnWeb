
	<div class="container" id="wraper_product_view">
		<div class="col-md-6 product_view_img">
			<div class="simpleLens-gallery-container" id="demo-1">
		        <div class="simpleLens-container">
		            <div class="simpleLens-big-image-container">
		                <a class="simpleLens-lens-image" data-lens-image="<?php echo base_url('upload/product/'.$info->image_link) ?>">
		                    <img width="520px;" height="338px;" src="<?php echo base_url('upload/product/'.$info->image_link) ?>" class="simpleLens-big-image">
		                </a>
		            </div>
		        </div>

		        <div class="simpleLens-thumbnails-container">
		        <?php $image_list = json_decode($info->image_list);?>
		        <?php foreach ($image_list as $img):?>
		        	<a href="#" class="simpleLens-thumbnail-wrapper"
		               data-lens-image="<?php echo base_url('upload/product/'.$img) ?>"
		               data-big-image="<?php echo base_url('upload/product/'.$img) ?>">
		                <img width="66px;" height="43px;" src="<?php echo base_url('upload/product/'.$img) ?>">
		            </a>
		        <?php endforeach; ?>
		        </div>
		    </div>

		</div>
		<div class="col-md-6 product_view_info">
			<div class="wraper_product_info">
				<div class="product_info">
					<p class="product_name"><?php echo $info->name; ?></p>
				</div>
				<div class="product_price">
					<p class="price"><strong><?php echo $info->price; ?></strong></p>
				</div>
				<div class="rating">
					<input value="5" type="number" class="rating rating-input" min=0 max=5 step=0.2 data-size="sm">
				</div>
			</div>
			<div class="product_description">
				<div class="product_view_more_info">
					<p class="product_view_more_info_title">Loại:</p>
					<p class="product_view_more_info_content"><?php echo $catalog->name; ?></p>
				</div>
			</div>
			<div class="select_number_product">
				<button class="number_product_button sub_button" type="button">-</button>
				<button class="number_product_button value_number" type="button"> </button>
				<button class="number_product_button add_button" type="button">+</button>
				<button type="button" class="read_more view_cart" onclick="window.open('<?php echo base_url().'Cart/add/'.$info->id; ?>', '_blank');">THÊM VÀO GIỎ</button>
			</div>
			<div class="view_wishlist">
				<button class="view_wishlist_btn" type="button">LƯU VÀO ƯA THÍCH</button>
			</div>
		</div>
	</div>
	<div class="container-fluid product_view_more_wraper">
		<div class="container">
			<div class="col-md-3 product_view_more_button">
				<button class="product_view_more detail_more_show btn btn-default" type="button"><p class="text-left">MÔ TẢ SẢN PHẨM</p></button>
				<button class="product_view_more shiping_more_show btn btn-default" type="button"><p class="text-left">VẬN CHUYỂN VÀ TRẢ HÀNG</p></button>
				<button class="product_view_more review_more_show btn btn-default" type="button"><p class="text-left">BÌNH LUẬN</p></button>
			</div>
			<div class="col-md-9 product_view_more_info_wraper">
				<div class="detail_more">
					<p>
						<?php echo $info->content; ?>
					</p>
				</div>
				<div class="shipping_more">
					
				</div>
				<div class="review_more" >
					<div class="review_more_title">
						<h3 id="info_comment"><?php echo count($comment) ?> REVIEW(S) FOR <?php echo $info->name; ?> / </h3>
						<h3> ADD REVIEW</h3>
					</div>
					<div id="div_comment">
					<?php foreach ($comment as $key):?>
					<div class="content_comment">
						<img src="<?php echo public_url() ?>/img/avatar.png">
						<div class="comment_contain">
							<p class="comment_name"><?php echo $key->user_name; ?> / </p>
							<p class="comment_time"> <?php echo get_date($key->created); ?></p>
							<p class="comment_content"><?php echo $key->content; ?></p>
							<div class="rating">
								<span class="glyphicon glyphicon-star" ></span>
								<span class="glyphicon glyphicon-star" ></span>
								<span class="glyphicon glyphicon-star" ></span>
								<span class="glyphicon glyphicon-star" ></span>
								<span class="glyphicon glyphicon-star-empty" ></span>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<?php if (isset($login_user)): ?>
								<input class="form-control" type="text" name="name" id="name" required="" value="<?php echo $login_user->name;?>" disabled="">
							<?php else: ?>
								<input class="form-control" type="text" name="name" id="name" required="" value="" placeholder="Enter your name!">
							<?php endif; ?>
						</div>
						<div class="col-xs-9">
							<input class="form-control" type="text" name="comment" id="txt_comm" placeholder="enter comment here!" >
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End content -->
	<!-- Mini slide -->
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
		<?php foreach ($list as $row): ?>
        <div class="item">
          <a href="<?php echo base_url().'Product/view/'.$row->id; ?>"><img class="mini_slide_img img-responsive" src="<?php echo base_url().'upload/product/'.$row->image_link; ?>"></a>
        </div>
       <?php endforeach; ?>
     </div>
