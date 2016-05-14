			
			<div class="right_col" role="main" style="min-height: 880.8px;">
				<?php $this->load->view('admin/admin/head'); ?>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Quản lý thành viên</h2>
		                    <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('admin'); ?>">Danh sách</a>
		                    <div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
		                  	<p>Sửa thông tin thành viên</p>
		                  	<form class="form-horizontal form-label-left" novalidate="" method="post">
		                  		<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
		                        </label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Họ và tên" required="required" type="text" value="<?php echo $info->name; ?>">
			                        </div>
			                        <p><?php echo form_error('name')?></p>
		                        </div>
		                      	<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
		                        </label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email" placeholder="Username" required="required" type="email" value="<?php echo $info->email; ?>">
			                        </div>
			                        <p><?php echo form_error('email')?></p>
		                        </div>
		                      	<div class="item form-group">
		                        <label class="control-label col-md-3" for="password">Phone</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length="6,8" name="phone" value="<?php echo $info->phone; ?>">
			                        </div>
			                        <p><?php echo form_error('phone')?></p>
		                      	</div>
		                      	<div class="item form-group">
		                        <label class="control-label col-md-3" for="password">Address</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length="6,8" name="address" value="<?php echo $info->address; ?>">
			                        </div>
			                        <p><?php echo form_error('address')?></p>
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




