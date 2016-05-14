<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body style="background:#F7F7F7;">
	  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="" class="form" id="form" method="post">
            <h1>Đăng Nhập</h1>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Tài khoản" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="" />
            </div>
            <div>
              <h5 style="color: red;"> <?php echo form_error('login');?> </h5>
              <input class="btn btn-default submit" value="Đăng nhập" type="submit">
              <a class="reset_pass" href="#">Quên mật khẩu?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Administrator! - Fresh fruit </h1>
                <p>©2016 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      
    </div>
  </div>
</body>
</html>