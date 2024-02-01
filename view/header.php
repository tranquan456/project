<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="boxcenter">
        <div class="menu1">
           <img src="img/logo.png">
        </div>
        <div class="menu2">
        <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="">GIỚI THIỆU</a></li>
                <li><a href="">LIÊN HỆ</a></li>
                <li><a href="">GÓP Ý</a></li>
                <li><a href="index.php?act=addtocart">GIỎ HÀNG</a></li>
                <li><a href="index.php?act=mybill">ĐƠN HÀNG</a></li>
            </ul>
        </div>
        <div class="banner">
            <div class="anhbanner">
                <img src="img/banner1.png" id="anh">
            </div>
            <script>
                var Image = ["img/banner2.png", "img/banner3.png", "img/banner4.png", "img/banner5.png"];
                var i = 0;
                function next() {
                    console.log(i);
                    document.getElementById("anh").src = Image[i];
                    if (i == Image.length - 1) {
                        i = 0;
                    }
                    else i++;
                }
                setInterval(next, 3000);
            </script>
        </div>
        <div class="content1">
            
        </div>