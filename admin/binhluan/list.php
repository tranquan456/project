<div class="content-wrapper">
<section class="content">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Quản lý bình luận</h1>
      </div>
    </div>
   </div>
</div>


<section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
            <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Người Bình Luận</th>
                        <th>Tên sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày Bình Luận</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach( $listbinhluan as $binhluan){
                    extract($binhluan);
                    echo '
                 <tr>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$ten_sanpham.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    
                 </tr>
                    ';
                }
                ?>
                </tbody>
            </table>

            </div> 
        </div>
      </div>
</section>
    </section>
</div>