<style>
    td {
        padding: 0 20px;
    }
</style>
<div class="row mb ">
    <div class="boxtrai mr">
        <?php extract($onesp); 
        ?>
            <div class="row mb 1 ">
                <div class="boxtitle">
                  <p> Thông tin sản phẩm </p>
                 
                </div>
                <div class="row box1">
                    <div class="box img">
                        <?php
                        $hinh=$img_path1.$img;
                        $img=$img_path.$img;
                        echo "<img src='$img' width='300'>";
                        ?>
                    </div>
                    <div class="box nd">
                        <?php  echo "<h2>$ten_sanpham</h2>"; ?>
                        <p>Mã Sản Phẩm: N/A</p>
                        <div class="price">
                           <h3>Giá Sale:  <span class="discounted-price"><?php echo $gia_sale ?>đ</span></h3>
                           <h3>Giá Gốc: <span class="original-price"> <?php echo $gia ?>đ</span></h3>
                        </div>
                        <h3>Size:</h3>
                        <div class="boxcart">
                                    <?php
                                
                                echo '
                                    <form action="index.php?act=addtocart" method="post">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="36">
                                    <label class="form-check-label" for="inlineRadio1">36</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="37">
                                    <label class="form-check-label" for="inlineRadio2">37</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="38">
                                    <label class="form-check-label" for="inlineRadio2">38</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="39">
                                    <label class="form-check-label" for="inlineRadio2">39</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="40">
                                    <label class="form-check-label" for="inlineRadio2">40</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="41">
                                    <label class="form-check-label" for="inlineRadio2">41</label>
                                </div>
                                <br>
                                <br>
                                <input type="number" name="soluong"min="1" max="10" value="1">
                                <input type="hidden" name="id" value="' . $id_sanpham . '">
                                <input type="hidden" name="name" value="' . $ten_sanpham . '">
                                <input type="hidden" name="image" value="'.$hinh.'">
                                <input type="hidden" name="price" value="' . $gia_sale . '">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>'; 
                            ?>           
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row mb 2 ">
            <div class="boxtitle">
                    <h1>Mô tả</h1>
                </div>
                <div class="row boxcontent">
                    <?php
                    echo "<p>$mo_ta</p>";
                    ?>
                </div>
            </div>
       
        <?php
            if (isset($_SESSION['user'])) {
        ?>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?php echo $id_sanpham ?>});
        });
        </script>   
        <div class="mb" id="binhluan">
        </div>
        <?php } else {?>
            <div class="box_title" style="margin-bottom: 20px">Vui lòng đăng nhập để bình luận sản phẩm này</div>
            <?php }?>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
            <?php foreach ($sp_cung_loai as $sp) :
                    extract($sp);
                    $img = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
                    echo '<div class="row mb sp">
                
                <img src="' . $img . '" alt="" style="width:70px;height:70px">

                    <a href="' . $linksp . '">
                        ' . $ten_sanpham . '
                    </a>
                
                </div>';
                endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include_once "view/boxphai.php";
    ?>

</div>