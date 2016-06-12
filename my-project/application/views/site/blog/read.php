<div id="wraper_blog" class="container-fluid">
	<div class="container">
		<div class="col-md-7">
				<img class="blog_img" src="<?php echo base_url('upload/blog/'.$blog->image_link)?>">
				<div>
				<p><h4><?php echo $blog->title; ?></h4></p>
				<div class="number_cmt">
					<i class="fa fa-comments blog_cmt_icon fa-2x"></i>
					<p class="number_cmt1">3</p>
				</div>
				<p class="text_time">BY <?php echo $blog->user_name ?> / <?php echo get_date($blog->created, false); ?></p>
				<br>
				<br>
				<?php echo $blog->content; ?>
				</div>
				<br>
			</div>

			<div class="col-md-4 col-md-offset-1">
				<?php $this->load->view('site/leftblog'); ?>
			</div>
	</div>
</div>