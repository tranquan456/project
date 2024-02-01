
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row cart">
                <div class="row frmtitle mb10">
                    <h1>Đơn Hàng Của Bạn</h1>
                </div>
                <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th>Mã Đơn Hàng</th>
                                <th>Ngày đặt</th>
                                <th>Khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Trạng Thái</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if(is_array($listbil)){
                                foreach($listbil as $bill){
                                    extract($bill);
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $kh=$bill["bill_name"].'
                                    <br>'.$bill["bill_email"].'
                                    <br>'.$bill["bill_address"].'
                                    <br>'.$bill["bill_tel"];
                                    if($ttdh=='Đơn hàng mới !'){
                                    $xoadh="index.php?act=xoabill&id=".$id;
                                    } 
                                    else{
                                        $xoadh="";
                                    }
                                    $ctdh="index.php?act=ctdh&id=".$id;
                                    echo'<tr>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td> <a class="" href="'.$xoadh.'"><input type="button" value="Hủy đơn hàng"></a>
                                    <a class="" href="'.$ctdh.'"><input type="button" value="Xem chi tiết đơn hàng"></a>
                                    </td>
                                    </tr>';
                                }
                            }
                            ?>
                        </table>
                    </div>
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