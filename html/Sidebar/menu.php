<?php
include("../admin/config.php");

$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>

<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){

    unset($_SESSION['dangky']);
}
?>
<link rel="stylesheet" href="../main.css">
  <head>
        <title>PhanTran-Watch</title>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/79869bac10.js"></script>
        <link rel="stylesheet" href="main.css">

    </head>

    <body>
        <header>
            <div class="logo">
                
                <a href="../index.php"><img  height="100px" width="100px" src="../img/logo.png" alt=""></a>
                
    
            </div>
            <div class="menu">
                <li><a href="cartegory.html">Thương hiệu</a>
                    <ul class="sub-menu">
                        <li><a href=""> Casio</a>
                            <ul>
                                <li><a href=""> EDIFICE</a></li>
                                <li><a href=""> G-SHOCK</a></li>
                                <li><a href="">  BABY-G</a></li>
                                <li><a href="">  SHEEN</a></li>
                            </ul> 
                        </li>
                        <li><a href=""> Seiko</a> 
                            <ul>
                                <li><a href=""> ARMY</a></li>
                                <li><a href="">PRESAGE</a></li>
                            </ul>
                        </li>

                        <li><a href=""> Citizen</a> 
                            <ul>
                                <li><a href=""> TSUYOSA</a></li>
                                <li><a href="">  OPEN HEART</a></li>
                                <li><a href="">   C7</a></li>
                            </ul>
                        </li>
                        <li><a href=""> Orient</a> 
                            <ul>
                                <li><a href="">  SUN and MOON</a></li>
                                <li><a href="">  ORIENT SK</a></li>
                                <li><a href=""> STAR</a></li>
                                
                            </ul>
                        </li>
                        
                        <li><a href="">Các thương hiệu khác</a></li>
                    </ul>

                
                </li>
                <li><a href="">Nam</a>
                    <ul class="sub-menu"> 
                        <li>Khoảng giá
                            <ul>
                                <li><a href="">Dưới 2tr</a></li>
                                <li><a href="">2tr - 3tr</a></li>
                                <li><a href="">3tr - 5tr</a></li>
                                <li><a href="">5tr - 10tr</a></li>
                                <li><a href="">Trên 10tr</a></li>
                            </ul>
                        </li>
                        <li><a href="">Thương hiệu</a>
                            <ul>
                                <li><a href="">Casio</a></li>
                                <li><a href="">Seiko</a></li>
                                <li><a href="">Citigen</a></li>
                                <li><a href="">Omega</a></li>
                                <li><a href="">Olym Pianus</a></li>
                            </ul>
                        </li>
                        <li><a href="">Các dòng đặc biệt</a>
                            <ul>
                                <li><a href="">Đồng hồ quân đội</a></li>
                                <li><a href="">Phiên bản giới hạn</a></li>
                                <li><a href="">Đồng hồ đính đá quý</a></li>
                            </ul>
                        </li>
                    </ul>
                
                </li>
                <li><a href="">Nữ</a>
                    <ul class="sub-menu">
                        <li>Khoảng giá
                            <ul>
                                <li><a href="">Dưới 2tr</a></li>
                                <li><a href="">2tr - 3tr</a></li>
                                <li><a href="">3tr - 5tr</a></li>
                                <li><a href="">5tr - 10</a></li>
                                <li><a href="">Trên 10tr</a></li>
                            </ul>
                        </li>
                        <li><a href="">Thương hiệu</a>
                            <ul>
                                <li><a href="">Casio</a></li>
                                <li><a href="">Citizen</a></li>
                                <li><a href="">Daniel Wellington</a></li>
                                <li><a href="">Tissot</a></li>
                                <li><a href="">Orient</a></li>
                            </ul>
                        </li>
                        <li><a href="">Chất liệu</a>
                            <ul>
                                <li><a href="">Vàng</a></li>
                                <li><a href="">Kim cương</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Cặp đôi</a>
                    <ul class="sub-menu">
                        <li>Khoảng giá
                            <ul>
                                <li><a href="">Dưới 2tr</a></li>
                                <li><a href="">2tr - 3tr</a></li>
                                <li><a href="">3tr - 5tr</a></li>
                                <li><a href="">5tr - 10tr</a></li>
                                <li><a href="">Trên 10tr</a></li>
                            </ul>
                        </li>
                        <li><a href="">Chất liệu dây</a>
                            <ul>
                                <li><a href="">Dây kim loại</a></li>
                                <li><a href="">Dây da</a></li>
                                <li><a href="">Dây cao du</a></li>
                            </ul>
                        </li>
                        <li><a href="">Thương hiệu</a>
                            <ul>
                                <li><a href="">Casio</a></li>
                                <li><a href="">Citizen</a></li>
                                <li><a href="">Olym Pianus</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Cao cấp</a>
                    <ul class="sub-menu">
                        <li><a href="">Rolex</a></li>
                        <li><a href="">Hublot</a></li>
                        <li><a href="">Omega</a></li>
                        <li><a href=""> Longines</a></li>

                    </ul>
                </li>
                <li><a href="">Dây đồng hồ</a>
                    <ul class="sub-menu">
                        <li><a href="">Dây da</a></li>
                        <li><a href="">Dây kim loại</a></li>
                        <li><a href="">Dây chất liệu khác</a></li>
                    </ul>
                </li>
    
            </div>
         <div class="other">
                <!-- <form action="index.php?quanli=timkiem" class="other" method="POST">
                <li><input placeholder="tìm kiếm" type="text"> <a href="../timkiem.php"></a><i class="fas fa-search"></i></li>
                <i class="fas fa-search" ></i><a href="../timkiem.php"></a>
                 <a href="../timkiem.php"></a>
             </li>
            </form> -->
            <form action="timkiem.php" method="GET">
    <li>
        <input placeholder="Tìm kiếm" type="text" name="tukhoa">
        <button type="submit"><i class="fas fa-search"></i></button>
    </li>
</form>
        </header>