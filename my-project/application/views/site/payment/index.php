

<script type="text/javascript">
  $(document).ready(function(){
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });

    $('#btn_auto').trigger('click'); 
  });
</script>

<?php if (isset($information_order) && $information_order): ?>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" id="btn_auto" style="visibility:hidden" data-target="#myModal">
  </button>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Đặt hàng thành công</h3>
      </div>
      <div class="modal-body">
        <h4>Thông tin đơn đặt hàng</h4>
        <p>Email: <?php echo $information_order[0]; ?></p>
        <p>Số điện thoại: <?php echo $information_order[1]; ?></p>
        <p>Địa chỉ: <?php echo $information_order[2]; ?></p>
        <p>Tổng tiền thanh toán: <?php echo $information_order[3]; ?></p>
        <p>Phương thức thanh toán: <?php echo $information_order[4]; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php elseif (isset($error) && $error): ?>
  <h1><?php echo $error; ?></h1>
<?php endif; ?>


<div class="container">
  <h1 style='text-align: center;'>THANH TOÁN ĐƠN HÀNG</h1>
  <br>
  <br>
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Bước 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Bước 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Bước 3</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="<?php echo base_url() . 'Payment/pay' ?>" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Thông tin cá nhân </h3>
          <div class="form-group">
            <label class="control-label">Họ & tên</label>
            <input  maxlength="100" type="text" class="form-control" name="name" placeholder="Nhập họ và tên"  />
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input maxlength="100" type="email" required="required" class="form-control" name="email" placeholder="Nhập email" />
          </div>
          <div class="form-group">
            <label class="control-label">Số điện thoại</label>
            <input maxlength="100" type="text" required="required" class="form-control" name="phone" placeholder="Nhập số điện thoại" />
          </div>
          <div class="form-group">
            <label class="control-label">Địa chỉ</label>
            <textarea required="required" class="form-control" name="address" placeholder="Nhập địa chỉ" ></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Hình thức thanh toán</h3>
          <div class="form-group radio">
            <label><input type="radio" value="Chuyển khoảng trước" name="oppayment">Chuyển khoảng trước</label>
          </div>
          <div class="form-group radio">
            <label><input type="radio" value="Thanh toán khi nhận hàng" name="oppayment" checked="">Thanh toán khi nhận hàng</label>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Hoàn tất - Xác nhận</h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  <br>
  <br>