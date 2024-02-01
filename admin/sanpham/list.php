<div class="content-wrapper">
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Hàng Hóa</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-right">
              <a href="index.php?act=addsp" class="btn btn-primary btn-sm">Thêm Sản Phẩm</a>
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
                  <th>Danh mục</th>

                  <th>Tên Sản Phẩm</th>
                  <th>Hình</th>
                  <th>Giá</th>
                  <th>Giá sale</th>
                  <th>Mô tả</th>
                  <th>Trạng Thái</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($listsp as $sanpham) {
                  extract($sanpham);
                  $suaadmin = "index.php?act=suasp&id=" . $id_sanpham;
                  $xoaadmin = "index.php?act=xoasp&id=" . $id_sanpham;
                  $hinhpath = "../upload/" . $img;
                  if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                  } else {
                    $hinh = "no photto";
                  }
                  echo '
                    <tr>
                    <td>' . $name . '</td>
                   
                    <td>' . $ten_sanpham . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $gia . '</td>
                    <td>' . $gia_sale . '</td>
                    <td>' . $mo_ta . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>
                    <a class="btn btn-info btn-sm" href="' . $suaadmin . '">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>  
                    <a class="btn btn-danger btn-sm" href="' . $xoaadmin . '">
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