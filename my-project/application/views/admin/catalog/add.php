			
			<div class="right_col" role="main" style="min-height: 880.8px;">
				<?php $this->load->view('admin/catalog/head'); ?>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Quản lý danh mục</h2>
		                    <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('catalog'); ?>">Danh sách</a>
		                    <div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
		                  	<p>Thêm mới danh mục</p>
		                  	<form class="form-horizontal form-label-left" novalidate="" method="post">
		                  		<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên danh mục <span class="required">*</span>
		                        </label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Tên danh mục" required="required" type="text" >
			                        </div>
			                        <p><?php echo form_error('name')?></p>
		                        </div>
		                      	<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Danh mục cha
		                        </label>
		                        	<div class="col-md-6 col-sm-6 col-xs-12">
			                         <select id="heard" class="form-control" required="" name="parent_id">
										<option value="0">Danh mục cha</option>
										<?php foreach ($list as $row):?>
											<option value="$row->sort_order"><?php echo $row->name ?></option>
										<?php endforeach; ?>	
									</select>
			                        </div>
		                        </div>
		                      	<div class="item form-group">
		                        <label class="control-label col-md-3" for="sort_order">Thứ tự hiển thị<span class="required">*</span></label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length="6,8" name="sort_order" placeholder="Thứ tự hiển thị" >
			                        </div>
			                        <p><?php echo form_error('sort_order')?></p>
		                      	</div>
		                      	<div class="ln_solid"></div>
		                      	<div class="form-group">
		                        <div class="col-md-6 col-md-offset-3">
		                          <button class="btn btn-primary" type="submit">Cancel</button>
		                          <button class="btn btn-success" type="submit" id="send">Submit</button>
		                        </div>
		                      </div>
		                  	</form>
		                    
		                  </div>
		                </div>
		             </div>
				</div>
			</div>




