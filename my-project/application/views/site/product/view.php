
	<script type="text/javascript">
		$(document).ready(function(){
			$('#txt_comm').keypress(function(event){
				if (event.keyCode == 13){
					if ($('#name').val() != ""){
					$.ajax({
				        type: 'POST',
				        url: '<?php echo base_url().'/Ajax/do_comment' ?>',
				        data: {product_id:'<?php echo $info->id; ?>', content: $('#txt_comm').val(), name: $('#name').val() },
				        success:function(response){
				        	result=response.split('~');
				        	if (result.length > 1){
					        	var main = $("<div class='content_comment'></div>");
					            var img = $("<img src='<?php echo public_url() ?>/img/avatar.png'></img>").text("Text.");
					            var comm_contain = $("<div class='comment_contain'><div/>");
					            var comm_name = $("<p class = 'comment_name'></>").text(result[0]);
					            var comm_time = $("<p class = 'comment_time'></>").text(result[2]);
					            var comm_content = $("<p class = 'comment_content'></>").text(result[1]);
					            var comm_rating = $("<div class='rating'><div/>");
					            var start1 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start2 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start3 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start4 = $("<span class='glyphicon glyphicon-star' ></span>");
					            var start5 = $("<span class='glyphicon glyphicon-star-empty' ></span>");
					            comm_rating.append(start1, start2, start3, start4, start5);
					            comm_contain.append(comm_name, comm_time, comm_content, comm_rating);
					            main.append(img, comm_contain);
					            $('#div_comment').append(main);
					            $('#info_comment').text("<?php echo (intval(count($comment)) + 1) ?> REVIEW(S) FOR <?php echo $info->name; ?> /");
				        	}
				        	else $('#txt_comm').val('Co loi xay ra!!');
				    	}
					});
					}
					else alert("Bạn chưa nhập tên!");
				}	
			});
		});
	</script>

	<div class="container" id="wraper_product_view">
		<div class="col-md-6 product_view_img">
			<img class="img-responsive" src="<?php echo base_url().'upload/product/'.$info->image_link;?>">
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
				<p>
					<?php echo $info->content; ?>
				</p>
			</div>
			<div class="select_number_product">
				<button class="number_product_button sub_button" type="button">-</button>
				<button class="number_product_button value_number"type="button"> </button>
				<button class="number_product_button add_button"type="button">+</button>
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
				<button class="product_view_more detail_more_show btn btn-default" type="button"><p class="text-left">THÔNG TIN</p></button>
				<button class="product_view_more shiping_more_show btn btn-default" type="button"><p class="text-left">VẬN CHUYỂN VÀ TRẢ HÀNG</p></button>
				<button class="product_view_more review_more_show btn btn-default" type="button"><p class="text-left">BÌNH LUẬN</p></button>
			</div>
			<div class="col-md-9 product_view_more_info_wraper">
				<div class="detail_more">
					<div class="product_view_more_info">
						<p class="product_view_more_info_title">Loại:</p>
						<p class="product_view_more_info_content"><?php echo $catalog->name; ?></p>
					</div>
					<div class="product_view_more_info">
						<p class="product_view_more_info_title">Fabric:</p>
						<p class="product_view_more_info_content"></p>
					</div>
					<div class="product_view_more_info">
						<p class="product_view_more_info_title">Dimensions:</p>
						<p class="product_view_more_info_content"></p>
					</div>
					<div class="product_view_more_info">
						<p class="product_view_more_info_title">weight:</p>
						<p class="product_view_more_info_content"></p>
					</div>
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
