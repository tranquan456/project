<div class="content-wrapper">
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý danh mục</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-right">
              <a href="index.php?act=adddm" class="btn btn-primary btn-sm">Thêm danh mục</a>
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
                  <th>STT</th>
                  <th>Tên Danh Mục</th>
                  <th>Hành Động</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  $suadm = "index.php?act=suadm&id=" . $id;
                  $xoadm = "index.php?act=xoadm&id=" . $id;
                  echo '
                 <tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>
                    <a class="btn btn-info btn-sm" href="' . $suadm . '">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>  
                    <a class="btn btn-danger btn-sm" href="' . $xoadm . '">
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