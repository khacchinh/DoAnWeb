<div class="right_col" role="main" style="min-height: 880.8px;">
        <?php $this->load->view('admin/catalog/head'); ?>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>THÊM BÀI VIẾT</h2>
                        <a class="btn btn-default" type="button" style="float: right;" href="<?php echo admin_url('product'); ?>">Danh sách</a>
                        <div class="clearfix"></div>
                      </div>

                      <div class="x_content">
                        <p>Thêm mới bài viết</p>
                          <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post"
                            action="">
                              <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" placeholder="Tiêu đề bài viết"type="text" >
                                </div>
                                <p><?php echo form_error('title')?></p>
                               </div>
                              <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dis">Mô tả<span class="required">*</span>
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="dis" placeholder="Mô tả nội dung"type="text" >
                                </div>
                                <p><?php echo form_error('name')?></p>
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
                                <button class="btn btn-success" type="submit" id="send">Thêm bài</button>
                                  <button class="btn btn-primary" >Hủy</button>
                                </div>
                              </div>
                          </form>
                      </div>
                    </div>
                 </div>
        </div>
      </div>




