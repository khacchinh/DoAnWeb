
        <div tabindex="5000" style="overflow: hidden; cursor: grab;" class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo admin_url("home/index")?>" class="site_title"><i class="fa fa-tachometer"></i> <span>Admin</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo public_url("admin") ?>/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Danh mục</h3>
              <ul class="nav side-menu">

                <li class="active"><a><i class="fa fa-home"></i> Tổng Quan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="">
                    <li class="current-page"><a href="index.html">Doanh số</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-sitemap"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a>Đơn hàng<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo admin_url('transaction'); ?> ">Đơn hàng</a>
                            </li>
                            <li><a href="<?php echo admin_url('order'); ?>">Chi tiết đơn hàng</a>
                            </li>
                          </ul>
                        </li>
                        <li><a>Sản phẩm<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo admin_url('product')?>">Sản phẩm</a>
                            </li>
                            <li><a href="<?php echo admin_url('catalog')?>">Danh mục</a>
                            </li>
                            <li><a href="#level2_2">Phản hồi</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>

                <li><a><i class="fa fa-line-chart"></i> Báo Cáo Thống kê <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none;">
                    <li><a href="#">Doanh Thu</a>
                    </li>
                    <li><a href="#">Tồn Kho</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tài khoản<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none;">
                    <li><a href="<?php echo admin_url("admin/index")?>">Ban quản trị</a>
                    </li>
                    <li><a href="tables_dynamic.html">Nhóm quản trị</a>
                    </li>
                    <li><a href="<?php echo admin_url("user/index")?>">Thành viên</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-cog"></i> Cài Đặt <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none;">
                    <li><a href="#">Users</a>
                    </li>
                    <li><a href="#">DataBase</a>
                    </li>
                    <li><a href="#">Giao Diện</a>
                    </li>
                    <li><a href="#">Trang</a>
                    </li>
                    <li><a href="#">Other </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-original-title="Settings" data-toggle="tooltip" data-placement="top" title="">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-original-title="FullScreen" data-toggle="tooltip" data-placement="top" title="">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-original-title="Lock" data-toggle="tooltip" data-placement="top" title="">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-original-title="Logout" data-toggle="tooltip" data-placement="top" title="">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      