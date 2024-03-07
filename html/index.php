<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>PhanTran-Watch</title>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/79869bac10.js"></script>
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <header>
        <div class="logo">

            <a href="./index.php"><img height="100px" width="100px" src="img/logo.png" alt=""></a>


        </div>
        <div class="menu">
           
            <?php
            include("admin/config.php");
            $sql_prod = "SELECT * FROM danhmuc ";
            $query_prod = mysqli_query($conn, $sql_prod);
            ?>
            <?php
            while ($row = mysqli_fetch_array($query_prod)) {
            ?>
         
         <li><a href="cartegory.php"><?php echo $row['tendanhmuc'] ?></a>
         
         <?php
            }
            ?>


         
            <ul class="sub-menu">
            
            <?php 
              include("admin/config.php");
              $sql_prod = "SELECT * FROM danhmuc,thuonghieu WHERE danhmuc.id_danhmuc=thuonghieu.id_danhmuc
             ORDER BY thuonghieu.id_thuonghieu DESC LIMIT 20";
            //   $sql_prod = "SELECT * FROM thuonghieu ";
              $query_prod = mysqli_query($conn, $sql_prod);
              ?>
              <?php
            while ($row = mysqli_fetch_array($query_prod)) {
            ?>
          
            <li><a href="quanlythuonghieu/lietke.php?idthuonghieu=<?php
            
            echo $row['id_thuonghieu'] ?>"><?=$row['tenthuonghieu']?></a></li>

       
            <?php
            }
            ?>
             
            </ul>
          </li>
        </div>










                <!-- <li><a href="cartegory.html">Thương hiệu</a>
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
                </li> -->
    
            <!-- </div> -->
        <div class="other">
        <form action="./Sidebar/timkiem.php" method="GET">
    <li>
        <input placeholder="Tìm kiếm" type="text" name="tukhoa">
        <button type="submit"><i class="fas fa-search"></i></button>
    </li>
</form>
            <li> <a class="fa-solid fa-bag-shopping"></a></li>
            <?php
            if (isset($_SESSION["islogin"])) {
            ?>
                <li> <a href="dangxuatkhachhang.php">Logout</a></li>
            <?php
            } else {
            ?>
                <li> <a href="taikhoan.php" class="fa-solid fa-user"></a></li>
            <?php
            }
            ?>


        </div>

    </header>
    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="img/slidetrangchu.jpg">
            <img src="img/slidetrangchu2.jpg">
            <img src="img/slidetrangchu3.jpg">
            <img src="img/slidetrangchu4.jpg">
            <img src="img/slidetrangchu5.jpg">

        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>

        </div>

    </section>



    </div>

    <!-- <h1 class="cartegory-right-content-heading row" style="font-size: 12px;">Nổi bật
        <div class="cartegory-right-content-item">
            <img src="img/dongho1.jpg" alt="" width="300" height="300">
            <h1>Frederique Constant </h1>
            <p>83,573,600<sup>đ</sup></p>
            <div class="content-heading-button">
                <button>XEM CHI TIẾT</button>
                <button>MUA NGAY</button>
            </div>
        </div>
        <div class="cartegory-right-content-item">
            <img src="img/dongho2.jpg" alt="" width="300" height="300">
            <h1>IWC Big Pilot’s</h1>
            <p>992,814,400<sup>đ</sup></p>
            <div class="content-heading-button">
                <button>XEM CHI TIẾT</button>
                <button>MUA NGAY</button>
            </div>
        </div>
        <div class="cartegory-right-content-item">
            <img src="img/dongho3.jpg" alt="" width="300" height="300">
            <h1>Longines Conquest</h1>
            <p>156,455,200<sup>đ</sup></p>
            <div class="content-heading-button">
                <button>XEM CHI TIẾT</button>
                <button>MUA NGAY</button>
            </div>
        </div>   
        <div class="cartegory-right-content-item">
            <img src="img/dongho4.jpg" alt="" width="300" height="300">
            <h1>Montblanc Heritage</h1>
            <p>122,046,500<sup>đ</sup></p>
            <div class="content-heading-button">
                <button>XEM CHI TIẾT</button>
                <button>MUA NGAY</button>
            </div>
        </div>   
    </h1>                               -->

    <?php
    include("admin/config.php");
    $sql_prod = "SELECT * FROM thuonghieu,sanpham WHERE sanpham.id_thuonghieu=thuonghieu.id_thuonghieu
    ORDER BY sanpham.id_sanpham DESC LIMIT 10";
    $query_prod = mysqli_query($conn, $sql_prod);
    ?>
    <h3>Sản phẩm mới nhất</h3>
    <ul class="product_list">
        <?php
        while ($row = mysqli_fetch_array($query_prod)) {
        ?>
            <li>
                <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                    <img src="admin/QuanLySanPham/Upload/<?php echo $row['hinhanh'] ?>" alt="">
                    <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?><br>
                    </p>
                    <p class="price_product">Giá: <?php echo $row['giatien'] ?> vnđ
                    </p>
                  
                    <div class="content-heading-button">
                    <button>XEM CHI TIẾT</button>
                     <button>MUA NGAY</button>
                     </div>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>

    
    <footer>
        <h5>THÔNG TIN LIÊN HỆ</h5>
        <b>Địa chỉ :176 Tô Hiến Thành,Phường 13,Quận 10</b><br>
        <div>Email :<a href="mailto:dh52005870@student.stu.edu.vn">DH52005818@student.stu.edu.vn</a></div> 
        <div>Email :<a href="mailto:dh52006034@student.stu.edu.vn">DH52005875@student.stu.edu.vn</a><div>
        <b>Tổng đài hỗ trợ : </b> 
        <div> SĐT : <a href="tel:0779182032">0779182032</a> </div>
        <a href="" class="text-left" ><img width="25px" height="25px" src="./img/facebook.png">facebook</a>
        <a href="" class="text-left" style="margin-left:50px; padding-top:5px;" ><img width="35px"height ="35px" src="./img/instagram.png ">Instagram</a>
    </footer>






</body>

<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img    ")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index = 0
    // console.log(imgPosition)
    imgPosition.forEach(function(image, index) {
        image.style.left = index * 100 + "%"
        dotItem[index].addEventListener("click", function() {
            slider(index)
        })

    })

    function imgSlide() {
        index++;
        console.log(index)
        if (index >= imgNumber) {
            index = 0
        }
        slider(index)
    }

    function slider(index) {
        imgContainer.style.left = "-" + index * 100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide, 3500)
</script>

</html>