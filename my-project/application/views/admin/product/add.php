
			<div class="right_col" role="main" style="min-height: 880.8px;">
				<?php $this->load->view('admin/catalog/head'); ?>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Quản lý sản phẩm</h2>
		                    <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('product'); ?>">Danh sách</a>
		                    <div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
		                  	<p>Thêm mới sản phẩm</p>
		                      <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post"
		                      	action="">
		                      	<div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên sản phẩm <span class="required">*</span>
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Tên sản phẩm"type="text" >
				                        </div>
				                        <p><?php echo form_error('name')?></p>
			                    </div>

			                    <div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Giá sản phẩm <span class="required">*</span>
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="price" placeholder="Giá sản phẩm"type="text" >
				                        </div>
				                        <p><?php echo form_error('price')?></p>
			                    </div>

			                    <div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Giảm giá
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="discount" placeholder="Giảm giá"type="text" >
				                        </div>
			                    </div>


			                    <div class="item form-group">
			                    	 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Hình ảnh
			                        </label>
			                         <div class="col-md-6 col-sm-6 col-xs-12">
			                         		<input type="file" size="25" id="image_list" name="image" >
			                         </div>
			                    </div>

			                    <div class="item form-group">
			                    	 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image_list">Hình ảnh kèm theo
			                        </label>
			                         <div class="col-md-6 col-sm-6 col-xs-12">
			                         		<input type="file" size="25" id="image_list" name="image_list[]" multiple="" >
			                         </div>
			                    </div>

			                   
		                      	
			                        <div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="catalog">Thể loại
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
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
			                        </div>
			                      	
			                      	<div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warranty">Bảo hành
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <input class="form-control" rows="3" type="text" name="warranty"></textarea>
				                        </div>
			                        </div>
			                      	<div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gifts">Quà tặng
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <textarea class="form-control" rows="3" name="gifts"></textarea>
				                        </div>
			                        </div>
		                      		<div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <textarea class="form-control" rows="3" name="title"></textarea>
				                        </div>
			                        </div>
			                        <div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dis">Meta discription
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <textarea class="form-control" rows="3" name="dis"></textarea>
				                        </div>
			                        </div>
			                        <div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="key">Meta keywords
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <textarea class="form-control" rows="3" name="key"></textarea>
				                        </div>
			                        </div>
		                      		<div class="item form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Nội dung
			                        </label>
				                        <div class="col-md-6 col-sm-6 col-xs-12">
				                          <script src="<?php echo public_url("admin") ?>/js/ckeditor/ckeditor.js"></script>
				                          <textarea class="form-control" rows="5" id="content" name="content"></textarea>
				                          <script>
				                        	CKEDITOR.replace( 'content' );
				                        	CKEDITOR.editorConfig = function( config ) {
												// Define changes to default configuration here. For example:
												config.language = 'fr';
    											config.uiColor = '#AADC6E';
											};
				                          </script>
				                        </div>
			                        </div>
			                        <div class="ln_solid"></div>
			                      	<div class="form-group" >
				                        <div class="col-md-6 col-md-offset-3">
				                          <button class="btn btn-primary" >Cancel</button>
				                          <button class="btn btn-success" type="submit" id="send">Submit</button>
				                        </div>
			                      	</div>
		                      </form>
		                  </div>
		                </div>
		             </div>
				</div>
			</div>




