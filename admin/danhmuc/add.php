<div class="content-wrapper">
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thêm danh mục</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
          <form action="index.php?act=adddm" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Danh mục <span>*</span></label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="tendm" placeholder="nhập tên danh mục" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <input class="btn btn-success pull-left" type="submit" name="themmoi" value="THÊM MỚI">
                  <a href="index.php?act=listdm"><input class="btn btn-success pull-left" type="button" value="DANH SÁCH"></a>
                </div>
              </div>

            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
              echo $thongbao;
            }
            ?>
          </form>
        </div>
      </div>
    </section>
    <!-- /.container-fluid -->
  </section>
</div>