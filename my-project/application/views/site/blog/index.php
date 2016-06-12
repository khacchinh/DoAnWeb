<div id="wraper_blog" class="container-fluid">
	<div class="container">
		<div class="col-md-7">
				<?php foreach ($list as $row):?>
				<div class="blog_content">
					<img src="<?php echo base_url('upload/blog/'.$row->image_link)?>" class="blog_img">
					<div>
						<p></p><h4><?php echo $row->title ?></h4><p></p>
						<p class="text_time">BY <?php echo $row->user_name ?> / <?php echo get_date($row->created, false); ?></p>
						<br>
						<br>
						<p class="text_content"><?php echo $row->discription ?></p>
					</div>
					<a href="<?php echo base_url().'Blog/view/'.$row->id; ?>" class="blog_read btn btn-primary">READ MORE</a>
				</div>
				<?php endforeach; ?>
				<div class="blog_title">
					<p class="text-center big_title">WHEN YOU FEEL LIKE QUITING THINK ABOUT WHY YOU STARTED</p>
					<p class="text-center small_title">-UNKNOWN</p>
				</div>
			</div>

			<div class="col-md-4 col-md-offset-1">
				<?php $this->load->view('site/leftblog'); ?>
			</div>
	</div>
</div>