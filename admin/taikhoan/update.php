 <?php
  if(is_array($taikhoan)){
    extract($taikhoan);
  }
?>
<div class="content-wrapper">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Update tài khoản admin</h1>
      </div>
    </div>
   </div>
</div>
<section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
            <div class="card-body">
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="card-body">
            <div class="form-group">
            <label for="" class="col-sm-2 control-label">Fullname <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="fullname" value="<?php echo $user?>">
            </div>
            <label for="" class="col-sm-2 control-label">Email <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="email" value="<?php echo $email?>">
            </div>
            <label for="" class="col-sm-2 control-label">Phone <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="phone" value="<?php echo $tel?>">
            </div>
            <label for="" class="col-sm-2 control-label">Password <span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="password" value="<?php echo $pass?>">
            </div>
            <label for="" class="col-sm-2 control-label">Địa chỉ<span>*</span></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="diachi" placeholder="vai trò " value="<?php echo $address?>">
            </div>
            <label for="" class="col-sm-2 control-label">Role <span>*</span></label>
            <select class="form-control" aria-label="Default select example" style="width: 515px" name="role">
                
                <option value="0">Khách hàng</option>
                <option value="1">Admin</option>
            </select>
</div>
<div class="form-group">
    <div class="col-sm-6">
    <input class="btn btn-success pull-left" type="submit" name="capnhat" value="Cập nhật">
    
    </div>
</div>

            </div> 
            </form>

            </div> 
        </div>
      </div>
</section>
</div>