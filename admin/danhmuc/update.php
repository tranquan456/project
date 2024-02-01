<div class="content-wrapper">
  <?php
  if (is_array($dm)) {
    extract($dm);
  }
  ?>
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Chỉnh sửa danh mục</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-cus">
          <div class="card-body">
            <form action="index.php?act=updatedm" method="post">
              <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Danh mục <span>*</span></label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="namedm" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
                </div>
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