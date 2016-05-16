			
			<div class="right_col" role="main" style="min-height: 880.8px;">
				<?php $this->load->view('admin/catalog/head'); ?>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Quản lý sản phẩm</h2>
		                    <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('product'); ?>">Danh sách</a>
		                    <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('product/add'); ?>">Thêm mới</a>
		                    
		                    <div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
		                  	<form action="<?php echo admin_url('product')?>" method="get">
		                  	<div class="row">
		                  		<div class="col-xs-1">
		                  			<label for="id">ID:  </label><input type="text" class="form-control" name="id">
		                  		</div>
		                  		<div class="col-xs-2">
		                  			<label for="id">Tên:  </label><input type="text" class="form-control" name="name">
		                  		</div>
		                  		<div class="col-xs-3">
		                  			<label class="control-label col-md-3 col-sm-3 col-xs-12">Select: </label>
		                  			
			                          <select class="form-control" name="catalog">
			                            <option value=""></option>
			                            <!-- kiem tra danh muc co danh muc con hay khong -->
											<?php foreach ($catalogs as $row):?>
											<?php if(count($row->subs) > 1):?>
	    				      				<optgroup label="<?php echo $row->name?>">
	    				      				    <?php foreach ($row->subs as $sub):?>
	    				               			<option value="<?php echo $sub->id?>" <?php echo ($this->input->get('catalog') == $sub->id) ? 'selected' : ''?>> <?php echo $sub->name?> </option>
	    						                <?php endforeach;?>
	    				               		</optgroup>
	    				               		<?php else:?>
	    				               		  <option value="<?php echo $row->id?>" <?php echo ($this->input->get('catalog') == $row->id) ? 'selected' : ''?>><?php echo $row->name?></option>
	    				               		<?php endif;?>
	    				               		<?php endforeach;?>
			                          </select>
			                        
		                  		</div>
		                  		<div class="col-xs-6">
		                  			<label class="col-xs-12">Tùy chọn</label>
		                  			<input class="btn btn-primary" type="submit" value="Lọc">
									<input class="btn btn-success" type="reset" onclick="window.location.href = '<?php echo admin_url('product')?>'; " value = "Reset">
		                  		</div>
		                  	</div>
		                  	</form>
		                  	<br>
		                    <p>Tổng số: <?php echo $total; ?></p>

		                    <?php $this->load->view('admin/message', $this->data); ?>

		                    <div class="table-responsive">
		                      <table class="table table-striped jambo_table bulk_action">
		                        <thead>
		                          <tr class="headings">
		                            <th>
		                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="check-all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
		                            </th>
		                            <th class="column-title">Mã số </th>
		                            <th class="column-title">Name </th>
		                            <th class="column-title">Giá 	</th>
		                            <th class="column-title no-link last"><span class="nobr">Hành động</span>
		                            </th>
		                            <th colspan="7" class="bulk-actions">
		                              <a style="color:#fff; font-weight:500;" class="antoo">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
		                            </th>
		                          </tr>
		                        </thead>

		                        <tbody>
		                        	<?php foreach ($list as $row):?>
			                          <tr class="even pointer">
			                            <td class="a-center ">
			                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="table_records" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
			                            </td>
			                            <td class=" "><?php echo $row->id; ?></td>
			                            <td class=" ">
			                            	<div class="row">
				                            		<div class="col-xs-2">
													<img height="50" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
													<div class="clear"></div>
												</div>
												<div class="col-xs-10">
													<a target="_blank" title="" class="tipS" href="<?php echo base_url().'Product/view/'.$row->id; ?>">
													    <b><?php echo $row->name?></b>
													</a>
													
													<div class="f11">
													  Đã bán: <?php echo $row->buyed?>	| Xem: <?php echo $row->view?>				
													 </div>
												</div>
			                            	</div>
			                            </td>
			                            <td  class=" ">
			                            	<?php if ($row->discount > 0): ?>
			                            		<p><?php echo ($row->price - $row->discount); ?></p>
			                            		<p style="color: red; text-decoration: line-through;"><?php echo $row->price; ?> </p>
			                            	<?php else: ?>
			                            		<p><?php echo $row->price; ?> </p>
			                            	<?php endif; ?>
			                            </td>
			                            <td class=" last">
			                            	<a class="btn btn-primary btn-xs" href="<?php echo base_url().'Product/view/'.$row->id; ?>"><i class="fa fa-folder"></i>Xem
											</a>
			                            	<a class="btn btn-info btn-xs" href="<?php echo admin_url('product/edit/'.$row->id); ?>">	<i class="fa fa-pencil"></i>Sửa
			                            	</a> 
			                            	<a class="btn btn-danger btn-xs" href="<?php echo admin_url('product/delete/'.$row->id); ?>"><i class="fa fa-trash-o"></i>Xóa
			                            	</a>
			                            </td>
			                          </tr>
			                        <?php endforeach; ?>
		                        </tbody>
		                      </table>
		                       <ul class="pagination"><?php echo $pagination_helper->create_links() ?></ul>
		                    </div>
		                    <button class="btn btn-default" type="button">Xóa hết</button>
		                  </div>
		                </div>
		             </div>
				</div>
			</div>




