<div class="content-wrapper">
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Đơn Hàng</h1>
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
                  <th>Mã Đơn Hàng</th>
                  <th>Khách hàng</th>
                  <th>Tổng Tiền</th>
                  <th>Trạng Thái</th>
                  <th>Ngày Dặt Hàng</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($listbill as $bill) {
                  extract($bill);
                  $suatt = "index.php?act=suatt&id=" . $id;
                  $ctdh = "index.php?act=ctdh&id=" . $id;
                  $kh = $bill["bill_name"] . '
                    <br>' . $bill["bill_email"] . '
                    <br>' . $bill["bill_address"] . '
                    <br>' . $bill["bill_tel"];
                  $ttdh = get_ttdh($bill['bill_status']);
                  $countsp = loadall_cart_count($bill['id']);
                  echo '
                    <tr>
                    <td>DAM-' . $bill['id'] . '</td>
                    <td>' . $kh . '</td>
                    <td><strong>' . $bill["total"] . '</strong>VND</td>
                    <td>' . $ttdh . '</td>
                    <td>' . $bill["ngaydathang"] . '</td>
                    <td>
                    <a class="btn btn-info btn-sm" href="' . $suatt . '">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>  
                    <a href="' . $ctdh . '" class="btn btn-primary btn-sm">Chi tiết đơn hàng</a>
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