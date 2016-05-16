      
      <div class="right_col" role="main" style="min-height: 880.8px;">
        <?php $this->load->view('admin/transaction/head'); ?>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Quản lý đơn hàng</h2>

                        <div class="clearfix"></div>
                      </div>

                      <div class="x_content">
                        <p>Tổng số: <?php echo $total_rows ?></p>

                        <?php $this->load->view('admin/message', $this->data); ?>

                        <div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>Print</span></a></div>

                        <br>

                        <div class="table-responsive">
                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Tổng tiền</th>
                                <th>Phương thức thanh toán</th>
                                <th>Ngày đặt hàng</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php foreach ($tran_data as $key):?>
                                <tr>
                                  <td><?php echo $key->id; ?></td>
                                  <td><?php echo $key->user_name; ?></td>
                                  <td><?php echo $key->user_email; ?></td>
                                  <td><?php echo $key->user_phone; ?></td>
                                  <td><?php echo $key->amount; ?></td>
                                  <td><?php echo $key->payment; ?></td>
                                  <td><?php echo get_date($key->created, false); ?></td>
                                  <td>
                                    <?php 
                                      if (intval($key->status) == 0) 
                                        echo "<p style = 'color: red;'>Chưa xử lý</p>";
                                      elseif (intval($key->status) == 1)
                                        echo "<p style = 'color: blue;'>Đã xử lý</p>";
                                    ?>
                                  </td>
                                  <td class="last">
                                    <a class="btn btn-primary btn-xs" href="<?php echo admin_url('order/detail') . '/'.$key->id; ?>"><i class="fa fa-folder"></i>Chi tiết</a>
                                    <a class="btn btn-danger btn-xs" href="<?php echo admin_url('transaction/del') . '/'.$key->id; ?>"><i class="fa fa-trash-o"></i>Xóa</a>
                                  </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                          <?php if (isset($pagination) && $pagination): ?>
                          <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                            <ul class="pagination">
                                <?php echo $pagination->create_links(); ?>
                            </ul>
                          </div>
                          <?php endif; ?>
                        </div>
                        <button class="btn btn-default" type="button">Xóa hết</button>
                      </div>
                    </div>
                 </div>
        </div>
      </div>




