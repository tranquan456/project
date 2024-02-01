<div class="content-wrapper">
<?php
  if(is_array($tt)){
    extract($tt);
  }
?>
 <section class="content">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Chỉnh sửa trạng thái đơn hàng</h1>
      </div>
    </div>
   </div>
</div>
<section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
            <div class="card-body">
              <form action="index.php?act=updatett" method="post">
              <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
            <div class="form-group">
            <label for="" class="col-sm-2 control-label">Trạng Thái<span>*</span></label>
            <select class="form-control" aria-label="Default select example" style="width: 515px" name="trangthai">
                
                <option  value="0">Đơn hàng mới</option>
                <option value="1">Đang Xử Lý</option>
                <option  value="2">Đang Giao</option>
                <option value="3">Đã giao</option>
            </select>
</div>
<div class="form-group">
    <div class="col-sm-6">
        <input type="submit" class="btn btn-success pull-left" name="capnhat">
    </div>
</div>
</form>
      </div> 
    </div>
      </div>
</section>
 </section>
</div>