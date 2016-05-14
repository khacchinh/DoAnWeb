	<!-- small header-->
	<div class="container-fluid" id="small_header">
		<div id="mini_header" class="container">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<select class="select" name="lang">
					<option value="">EN</option>
					<option value="">FR</option>
					<option value="">ES</option>
					<option value="">DS</option>
				</select>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<select class="select" name="country">
					<option value="USD">$ US</option>
				</select>
			</div> 
			<div class="col-xs-5 col-lg-offset-5 col-sm-5 col-md-5 col-lg-5">
				<ul id="login">
					 <?php if (!isset($login_user)): ?>
					 <li><a href="<?php echo base_url() . 'login'; ?>">LOGIN/</a><a href="<?php echo base_url() . 'signup'; ?>">REGISTER</a></li>
					 <li><a id="wishlist" href="<?php echo base_url() . 'wishlist'; ?>">MY WISHLIST</a></li>
					<?php else: ?>
						<li><p>Welcome: <?php echo $login_user->name; ?></p></li>
						<li><a href="<?php echo base_url() . 'login/logout'; ?>">LOGOUT</a></li>
						<li><a id="wishlist" href="<?php echo base_url() . 'wishlist'; ?>">MY WISHLIST</a></li>
					<?php endif; ?>
			 	 </ul>
			</div>
		</div>
	</div>

	<!-- menu -->
	<nav class="navbar navbar-default container-fluid">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header col-xs-12 col-sm-2 col-md-2 col-lg-2">
	      <button aria-expanded="false" data-target="#nav-menu" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="<?php echo base_url() .'home'; ?>" class="navbar-brand">
	      	<img alt="" src="<?php echo public_url()?>/img/logo.png" class="logo-page">
	      </a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="nav-menu" class="collapse navbar-collapse col-xs-12 col-sm-2 col-md-2 col-lg-10">
	      <ul class="nav navbar-nav col-xs-12 col-sm-2 col-md-2 col-lg-8 nav-menu-sub">
	        <li><a href="<?php echo base_url(); ?>">TRANG CHỦ<span class="sr-only">(current)</span></a></li>
	        <li class="dropdown">
	          <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">SẢN PHẨM</a>
	          <ul class="dropdown-menu">
	          	<?php foreach ($catalog_list as $row):?>
	            <li><a href="<?php echo base_url().'Product/showProductCatalog/'.$row->id; ?>"><?php echo $row->name; ?></a></li>
	            <?php endforeach; ?>
	          </ul>
	        </li>
	        <li><a href="<?php echo base_url(). 'blog';?>">BLOG</a></li>
	        <li><a href="<?php echo base_url() . 'faqs'; ?>">HƯỚNG DẪN MUA HÀNG</a></li>
	        <li><a href="#">LIÊN HỆ</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-left col-xs-12 col-sm-2 col-md-2 col-lg-4">
	      	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-12 cart">
	      		<li class="dropdown">
		          <a href="<?php echo base_url(). 'Cart'; ?>" aria-expanded="false" aria-haspopup="true" role ="button">
		          	<i class="fa fa-shopping-basket fa-2x"></i>
		          	<i class="count-item" id="count_item"><?php echo $total_product_in_cart; ?></i>
				  </a>
	        	</li>
	      	</div>
	        <form role="search" class="navbar-form navbar-right col-xs-12 col-sm-2 col-md-2 col-lg-12">
	        <div class="form-group">
	          <input type="text" placeholder="TÌM KIẾM SẢN PHẨM" class="form-control search-input">
	        </div>
	        <button class="btn btn-default glyphicon glyphicon-search sreach-btn" type="submit"></button>
	      </form>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	