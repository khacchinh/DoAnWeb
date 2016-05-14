	<div class="container-fluid menu-mini-bar">
		<div class="container">
			<?php foreach ($catalog_list as $row):?>
				<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $row->name ?></a>
				<ul class="dropdown-menu">
		          	<?php foreach ($row->subs as $child):?>
		            <li><a href="#"><?php echo $child->name; ?></a></li>
		            <?php endforeach; ?>
		         </ul>
	         <?php endforeach; ?>
		</div>
	</div>