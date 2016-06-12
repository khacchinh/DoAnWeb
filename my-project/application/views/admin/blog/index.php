<!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
            <a class="btn btn btn-success" href="<?php echo admin_url('blog/add'); ?>" class="btn btn-success">THÊM BÀI VIẾT</a>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-5 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>DANH SÁCH BLOG</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Số thứ tự</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Người viết</th>
                        <th>Nội dung</th>
                        <th>Ngày tạo</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0?>
                    <?php foreach ($list as $row):?>
                      <tr>
                      <td>
                        <?php echo $count = $count + 1; ?>
                      </td>
                      <td><?php echo $row->title ?></td>
                      <td><?php echo $row->discription ?></td>
                      <td><?php echo $row->user_name ?></td>
                      <td><?php echo $row->content ?></td>
                      <td><?php echo get_date($row->created, false); ?></td>
                      <td>
                        <a class="btn btn-primary btn-xs" href="<?php echo base_url().'Blog/view/'.$row->id; ?>"><i class="fa fa-folder"></i>Xem
                      </a>
                                    <a class="btn btn-info btn-xs" href="<?php echo admin_url('Blog/edit/'.$row->id); ?>"> <i class="fa fa-pencil"></i>Sửa
                                    </a> 
                                    <a class="btn btn-danger btn-xs" href="<?php echo admin_url('Blog/delete/'.$row->id); ?>"><i class="fa fa-trash-o"></i>Xóa
                                    </a>
                      </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        <!-- Bootstrap core CSS -->

  <link href="<?php echo public_url("admin/blog") ?>/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo public_url("admin/blog") ?>/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo public_url("admin/blog") ?>/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo public_url("admin/blog") ?>/css/custom.css" rel="stylesheet">
  <link href="<?php echo public_url("admin/blog") ?>/css/icheck/flat/green.css" rel="stylesheet">

  <link href="<?php echo public_url("admin/blog") ?>/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo public_url("admin/blog") ?>/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo public_url("admin/blog") ?>/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo public_url("admin/blog") ?>/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo public_url("admin/blog") ?>/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo public_url("admin/blog") ?>/js/jquery.min.js"></script>    
        <script src="<?php echo public_url("admin/blog") ?>/js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="<?php echo public_url("admin/blog") ?>/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo public_url("admin/blog") ?>/js/icheck/icheck.min.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/jszip.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/pdfmake.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/vfs_fonts.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/buttons.print.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo public_url("admin/blog") ?>/js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="<?php echo public_url("admin/blog") ?>/js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable({
              paging:true
            });
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "<?php echo public_url("admin/blog") ?>/js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>