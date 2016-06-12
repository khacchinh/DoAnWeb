			
			<div class="right_col" role="main" style="min-height: 880.8px;">
				<?php $this->load->view('admin/catalog/head'); ?>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Quản lý phản hồi</h2>
		                    
		                    <div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
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
		                            <th class="column-title">Email </th>
		                            <th class="column-title">Subject </th>
		                            <th class="column-title">Content </th>
		                            <th class="column-title">Status </th>
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
			                            <td class=" "><?php echo $row->name_customer; ?> </td>
			                            <td class=" "><?php echo $row->email_customer; ?> </td>
			                            <td class=" "><?php echo $row->subject; ?> </td>
			                            <td class=" "><?php echo $row->content; ?> </td>
			                            <td class=" ">
			                            	<?php if ($row->status == 0): ?>
			                            		<?php echo "<p style = 'color: red;'>Chưa phản hồi</p>" ?>
			                            	<?php else: ?>
			                            		<?php echo "<p style = 'color: blue;'>Đã phản hồi</p>" ?>
			                            	<?php endif; ?>
			                            </td>
			                            <td class=" last">
			                            	<a class="btn btn-info btn-xs" 
			                            		<?php if ($row->status == 0): ?>
			                            			href="<?php echo base_url('Contact_Requird_Customer/progress/'.$row->id); ?>"
				                            	<?php endif; ?>
			                            	><i class="fa fa-pencil"></i>Phản hồi</a> 
			                            	<a class="btn btn-danger btn-xs" href="<?php echo base_url('Contact_Requird_Customer/delete/'.$row->id); ?>"><i class="fa fa-trash-o"></i>Xóa</a>
			                            </td>
			                          </tr>
			                        <?php endforeach; ?>
		                        </tbody>
		                      </table>
		                    </div>
		                    <button class="btn btn-default" type="button">Xóa hết</button>
		                  </div>
		                </div>
		             </div>
				</div>
			</div>




