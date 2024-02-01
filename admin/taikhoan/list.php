<div class="content-wrapper">
  <section class="content">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Quản lý tài khoản Admin</h1>
      </div>
      <div class="col-sm-6">
        <div class="float-sm-right">
		<a href="index.php?act=themtk" class="btn btn-primary btn-sm">Thêm Tài khoản</a>
	    </div>
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
                <th>Id</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Chức vụ</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach( $listtaikhoan as $color){
                    extract($color);
                    $suaadmin="index.php?act=suatk&id=".$id;
                    $xoaadmin="index.php?act=xoatk&id=".$id;
                    echo '
                    <tr>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$email.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.' </td>
                    <td>'.$role.' </td>
                    <td>
                    <a class="btn btn-info btn-sm" href="'.$suaadmin.'">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>  
                    <a class="btn btn-danger btn-sm" href="'.$xoaadmin.'">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                    </td>
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