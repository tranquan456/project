<div class="row mb ">
    <div class="boxtrai mr">
        
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;

                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                <a href="' . $linksp . '"><div class="row img"><img src="' . $hinh . '" alt=""></div></a>
                <div class="price">
                <span class="original-price">'.$gia.'đ</span>
                <span class="discounted-price">'.$gia_sale.'đ</span>
               </div>
               <div class="tensp">
                    <a href="' . $linksp . '">' . $ten_sanpham . '</a>
                    </div>
                              </div>';
                $i += 1;
            }

            ?>

        </div>
    </div>