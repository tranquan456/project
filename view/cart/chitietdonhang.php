
<div class="row mb">
        <div class="boxtrai mr">
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

        <div class="row mb">
            <div class="row frmtitle ">
                <h1>THÔNG TIN ĐƠN HÀNG</h1>
            </div>
            <div class="row boxcontent3 mb">
                <li> Mã đơn hàng : DAM - <?php echo $ttdh['id']; ?></li>
                <li> Ngày đặt hàng : <?php echo $ttdh['ngaydathang']; ?></li>
                <li> Tổng đơn hàng : <?php echo $ttdh['total']; ?></li>
                <li> Người đặt hàng: <?php echo $kh ?></li>
                <li> Trạng thái đơn hàng: <?php echo $dh ?></li>
            </div>
        </div>
            <div class="row cart">
                <div class="row frmtitle mb10">
                    <h1>Đơn Hàng Của Bạn</h1>
                </div>
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Size</th>
                                <th>Số lượng</th>
                                <th>Giá sản phẩm</th>
                                <th>Tổng tiền</th>
                                
                            </tr>
                            <?php
                            if(is_array($ctdh)){
                                foreach($ctdh as $dh){
                                    extract($dh);
                                    $hinh="upload/".$img;
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
                        </table>
                    </div>
            </div>
            <a class="continue-button" href="index.php">Tiếp tục mua </a>
        </div>
        <?php
        include_once "view/boxphai.php";
        ?>
    </div>
<?php

?>