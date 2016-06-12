
<div class="filter container">
			<?php 
				if (isset($catalog) && $catalog)
					echo "<h4 class='text-success'>Danh sách sản phẩm: <kbd>" . $catalog->name . "</kbd></h4>"; 
				else if (isset($key_search) && $key_search)
					echo "<h4 class='text-success'>Danh sách sản phẩm với từ khóa: <kbd>" . $key_search . "</kbd></h4>";;
			?>
	</div>
	<br>
	<!-- Content -->
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
			<?php if (count($product) == 0) echo "Not found. Please bạn hãy tìm với từ khóa khác. Lưu ý tiếng việt có dấu.!! Thank you <br><br>"?>
			<?php foreach ($product as $key):?>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product">
				<div class="product_img">
					<img class="img-responsive" src="<?php echo base_url('upload/product/'.$key["image_link"]) ?>">
				</div>
				<div class="product_info">
					<p class="product_name"><?php echo $key["name"]; ?></p>
				</div>
				<div class="product_price">
					<?php if ($key["discount"] > 0): ?>
					<p class="price"> <small style="text-decoration: line-through; color: black;	"><?php echo $key["price"];?></small> <strong><?php echo $key["price"]-$key["discount"]; ?></strong></p>
					<?php else: ?>
					<p class="price"><strong><?php echo $key["price"]; ?></strong></p>
					<?php endif; ?>
				</div>
				<div class="rating">
					<input value="4" type="number" class="rating rating-input" min=0 max=5 step=0.2 data-size="sm">
				</div>
				<div class="product_index">
					<img class="img-responsive" width="23px" height="95px" src="img/label/moi.jpg">
				</div>
				<div class="hover_product">
					<p class="text-center"><button type="button" class="hover_button" onclick = "buy_item('<?php echo $key["id"] ?>')">THÊM VÀO GIỎ</button></p>
					<p class="text-center"><button type="button" class="hover_button" onclick="window.open('<?php echo base_url().'Product/view/'.$key["id"]; ?>', '_blank');">XEM</button></p>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<div class="container number-page">
		<p class="text-center">
	        <ul class="pagination">
                <?php 
                	if (isset($pagination) && $pagination)
                		echo $pagination->create_links();
                 ?>
            </ul>
	    </p>
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
		<?php foreach ($list as $key):?>
	        <div class="item">
	          <a href="<?php echo base_url().'Product/view/'.$key->id; ?>"><img class="mini_slide_img img-responsive" src="<?php echo base_url('upload/product/'. $key->image_link)?>"></a>
	        </div>
	    <?php endforeach; ?>     
	</div>