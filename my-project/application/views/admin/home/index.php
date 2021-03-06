
<div role="main" class="right_col" style="min-height: 521px;">

        <!-- top tiles -->
        <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số truy cập</span>
              <div class="count"><?php echo $sumview ?></div>
              <span class="count_bottom"><i class="green">4% </i> Tuần qua</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-clock-o"></i>Tổng số đơn hàng</span>
              <div class="count"><?php echo $sum_order ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> Tuần qua</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số thành viên</span>
              <div class="count green"><?php echo $sum_user ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Tuần qua</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số đơn hàng chờ</span>
              <div class="count"><?php echo $sum_order_no ?></div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Tuần qua</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Tổng đơn hàng đã xử lý</span>
              <div class="count"><?php echo $sum_order_yes ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Tuần qua</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Doanh thu</span>
              <div class="count"><?php echo $sum_revenue ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Tuần qua</span>
            </div>
          </div>

        </div>
        <!-- /top tiles -->

       <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Biểu đồ doanh thu <small>Tuần</small></h2>
                  <div class="filter">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc" class="pull-right" id="reportrange">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>March 29, 2016 - April 27, 2016</span> <b class="caret"></b>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-9 col-sm-12 col-xs-12">
                    <div style="height:280px" class="demo-container">
                      <div class="demo-placeholder" id="placeholder33x" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 280px;" width="1103" height="350"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 73px; top: 263px; left: 60px; text-align: center;" class="flot-tick-label tickLabel">28/04/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 143px; text-align: center;" class="flot-tick-label tickLabel">30/04/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 226px; text-align: center;" class="flot-tick-label tickLabel">02/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 309px; text-align: center;" class="flot-tick-label tickLabel">04/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 393px; text-align: center;" class="flot-tick-label tickLabel">06/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 476px; text-align: center;" class="flot-tick-label tickLabel">08/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 559px; text-align: center;" class="flot-tick-label tickLabel">10/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 642px; text-align: center;" class="flot-tick-label tickLabel">12/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 725px; text-align: center;" class="flot-tick-label tickLabel">14/05/16</div><div style="position: absolute; max-width: 73px; top: 263px; left: 808px; text-align: center;" class="flot-tick-label tickLabel">16/05/16</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 245px; left: 13px; text-align: right;" class="flot-tick-label tickLabel">0</div><div style="position: absolute; top: 204px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">20</div><div style="position: absolute; top: 163px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">40</div><div style="position: absolute; top: 123px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">60</div><div style="position: absolute; top: 82px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">80</div><div style="position: absolute; top: 41px; left: 0px; text-align: right;" class="flot-tick-label tickLabel">100</div><div style="position: absolute; top: 1px; left: 0px; text-align: right;" class="flot-tick-label tickLabel">120</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 280px;" width="1103" height="350"></canvas><div class="legend"><div style="position: absolute; width: 99px; height: 17px; top: 17px; right: 23px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:17px;right:23px;;font-size:smaller;color:#3f3f3f"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(150,202,89);overflow:hidden"></div></div></td><td class="legendLabel">Doanh thu ngày&nbsp;&nbsp;</td></tr></tbody></table></div></div>
                    </div>
                    <div class="tiles">
                      <div class="col-md-4 tile">
                        <span>Tổng đơn hàng</span>
                        <h2><?php echo $sum_order ?></h2>
                        <span style="height: 160px;" class="sparkline11 graph">
                                        <canvas style="display: inline-block; vertical-align: top; width: 94px; height: 30px;" height="60" width="200"></canvas>
                                    </span>
                      </div>
                      <div class="col-md-4 tile">
                        <span>Tổng đơn hàng đã xử lý</span>
                        <h2><?php echo $sum_order_yes ?></h2>
                        <span style="height: 160px;" class="sparkline22 graph">
                                        <canvas style="display: inline-block; vertical-align: top; width: 94px; height: 30px;" height="60" width="200"></canvas>
                                    </span>
                      </div>
                      <div class="col-md-4 tile">
                        <span>Tổng doanh thu</span>
                        <h2><?php echo $sum_revenue ?></h2>
                        <span style="height: 160px;" class="sparkline11 graph">
                                        <canvas style="display: inline-block; vertical-align: top; width: 94px; height: 30px;" height="60" width="200"></canvas>
                                    </span>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <div>
                      <div class="x_title">
                        <h2>Doanh thu nhân viên</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench"></i></a>
                            <ul role="menu" class="dropdown-menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <ul class="list-unstyled top_profiles scroll-view" style="overflow: hidden; cursor: grab;" tabindex="5001">

                        <li class="media event">
                          <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                          <div class="media-body">
                            <a href="#" class="title">Mr. Khac Chinh</a>
                            <p><strong>$2300. </strong> Demo </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        <br>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>MAIL</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="dashboard-widget-content">

                  <ul class="list-unstyled timeline widget">
                    <?php foreach ($requird as $key): ?>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                                            <a><?php echo $key->subject ?></a>
                                        </h2>
                          <div class="byline">
                            <span><?php echo get_date($key->created_at) ?></span> by <a href="<?php echo admin_url('user') ?>"><?php echo $key->name_customer ?></a>
                          </div>
                          <p class="excerpt"><?php echo $key->content ?><a href="<?php echo base_url('Contact_Requird_Customer') ?>">   Read&nbsp;More</a>
                          </p>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">


              <!-- Start to do list -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lịch làm việc</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench"></i></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="">
                      <ul class="to_do">
                        <li>
                          <p>
                            <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>Xử lý tất cả các đơn hàng còn lại </p>
                        </li>
                        <li>
                          <p>
                            <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> Xử lý phản hồi của khách hàng</p>
                        </li>
                        <li>
                          <p>
                            <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> Cập nhật sản phẩm mới cho website</p>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End to do list -->


              <!-- start of weather widget -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Thông tin thời tiết</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench"></i></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Monday</b>, 07:30 AM
                          <span><b>C</b>
                                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <span>
                                            <canvas id="partly-cloudy-day" width="84" height="84"></canvas>
                                        </span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Thử Đức
                                            <br><i>TP HCM</i>
                                        </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">23</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mon</h2>
                          <h3 class="degrees">25</h3>
                          <span>
                                                <canvas height="32" width="32" id="clear-day">
                                                </canvas>

                                        </span>
                          <h5>15
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Tue</h2>
                          <h3 class="degrees">25</h3>
                          <canvas id="rain" width="32" height="32"></canvas>
                          <h5>12
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Wed</h2>
                          <h3 class="degrees">27</h3>
                          <canvas id="snow" width="32" height="32"></canvas>
                          <h5>14
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Thu</h2>
                          <h3 class="degrees">28</h3>
                          <canvas id="sleet" width="32" height="32"></canvas>
                          <h5>15
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Fri</h2>
                          <h3 class="degrees">28</h3>
                          <canvas id="wind" width="32" height="32"></canvas>
                          <h5>11
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sat</h2>
                          <h3 class="degrees">26</h3>
                          <canvas id="cloudy" width="32" height="32"></canvas>
                          <h5>10
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->
            </div>

          </div>

        </div>

                <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
              <div class="x_title">
                <h2>Sản phẩm bán chạy</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table style="width:100%" class="">
                  <tbody><tr>
                    <th style="width:37%;">
                      <p>Top 5</p>
                    </th>
                    <th>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p class="">Device</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p class="">Progress</p>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                      <canvas style="margin: 15px 10px 10px 0px; width: 160px; height: 160px;" width="200" height="200" id="canvas1"></canvas>
                    </td>
                    <td>
                      <table class="tile_info">
                        <tbody><tr>
                          <td>
                            <p><i class="fa fa-square blue"></i>Kiwi </p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square green"></i>Nho </p>
                          </td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square purple"></i>Dâu</p>
                          </td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square aero"></i>Quả óc chó </p>
                          </td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square red"></i>Khác </p>
                          </td>
                          <td>30%</td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </div>
            </div>
          </div>

        </div>
      </div>