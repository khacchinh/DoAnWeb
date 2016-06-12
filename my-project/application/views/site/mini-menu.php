	<div class="container-fluid menu-mini-bar">
		<div class="container">
		<?php foreach ($catalog_list as $row):?>
			<li class="dropdown" style="list-style:none; float: left; margin-right: 10px;">
				<a href="<?php echo base_url().'Product/showProductCatalog/'.$row->id; ?>" style="color: white;" class="dropdown-toggle menu-mini_bar-link"  role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row->name ?></a>
				<?php if (isset($row->subs) && $row->subs):  ?>
				<ul class="dropdown-menu">
		          	<?php foreach ($row->subs as $child):?>
		            <li><a href="<?php echo base_url().'Product/showProductCatalog/'.$child->id; ?>"><?php echo $child->name; ?></a></li>
		            <?php endforeach; ?>
		         </ul>
		     	<?php endif; ?>
	         </li>
	    <?php endforeach; ?>
		</div>
	</div>
	<br>