<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb  ">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email :
                        <input type="email" name="email" id="" required>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập:
                        <input type="text" name="name" id=""required>
                    </div>
                    <div class="row mb10">
                        Mật khẩu:
                        <input type="password" name="pass" id=""required>
                    </div>
                    <div class="row mb10">
                        Địa chỉ:
                        <input type="text" name="diachi" id=""required>
                    </div>
                    <div class="row mb10">
                        Số điện thoại:
                        <input type="text" name="phone" id=""required>
                    </div>
                    <input type="submit" value="Đăng ký" name=dangky>
                    
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>
    <?php
    include_once "view/boxphai.php";
    ?>

</div>