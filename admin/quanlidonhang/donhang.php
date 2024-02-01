<div class="content-wrapper">
    <section class="content">
        <?php
         if(is_array($ttdh)){
            extract($ttdh);
            $dh=get_ttdh($ttdh['bill_status']);
            $kh=$ttdh["bill_name"].'
            '.$ttdh["bill_email"].'
            '.$ttdh["bill_address"].'
            '.$ttdh["bill_tel"];
          }
        ?>

        <div class="">
            <div class="content-header">
                <h1>THÔNG TIN ĐƠN HÀNG</h1>
            </div>
            <div class="card card-cus">
              <div class="card-body">
                <div class="">
                    <li> Mã đơn hàng : DAM - <?php echo $ttdh['id']; ?></li>
                    <li> Ngày đặt hàng : <?php echo $ttdh['ngaydathang']; ?></li>
                    <li> Tổng đơn hàng : <?php echo $ttdh['total']; ?></li>
                    <li> Người đặt hàng: <?php echo $kh ?></li>
                    <li> Trạng thái đơn hàng: <?php echo $dh ?></li>
                </div>
              </div>
            </div>
        </div>
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
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(is_array($ctdh)){
                                foreach($ctdh as $dh){
                                    extract($dh);
                                    $hinh="../upload/".$img;
                                    echo'<tr>
                                    <td>'.$name.'</td>
                                    <td><img style="height: 120px;width: 120px;" src="'.$hinh.'" alt=""></td>
                                    <td>'.$size.'</td>
                                    <td>'.$soluong.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$thanhtien.'</td>
                                    </tr>';
                                }
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