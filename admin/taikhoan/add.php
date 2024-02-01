<div class="content-wrapper">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm tài khoản</h1>
      </div>
    </div>
   </div>
</div>
<section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
            <div class="card-body">
            <form action="index.php?act=themtk" method="post" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group">
            <label for="" class="col-sm-2 control-label">Fullname <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="fullname" placeholder="nhập fullname " required>
            </div>
            <label for="" class="col-sm-2 control-label">Email <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="email" placeholder="nhập email " required>
            </div>
            <label for="" class="col-sm-2 control-label">Phone <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="phone" placeholder="nhập số điện thoại " required>
            </div>
            <label for="" class="col-sm-2 control-label">Password <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="password" placeholder="nhập mật khẩu " required>
            </div>
            <label for="" class="col-sm-2 control-label">Địa chỉ<span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="diachi" placeholder="địa chỉ " required> 
            </div>
            <label for="" class="col-sm-2 control-label">Role <span>*</span></label>
            <select class="form-control" aria-label="Default select example" style="width: 515px" name="role">
                
                <option value="Khách Hàng">Khách hàng</option>
                <option value="Admin">Admin</option>
            </select>
</div>
<div class="form-group">
    <div class="col-sm-6">
    <input class="btn btn-success pull-left" type="submit" name="themmoi" value="THÊM MỚI">
    <a href="index.php?act=dstk"><input  class="btn btn-success pull-left" type="button" value="DANH SÁCH"></a>
    </div>
</div>

            </div> 
            <?php
              if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
              }
            ?>
            </form>

            </div> 
        </div>
      </div>
</section>
</div>