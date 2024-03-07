<?php
// Kết nối CSDL và kiểm tra kết nối
include('./admin/config.php');
$id = $_GET['id'];
$sql_chitiet = "SELECT * FROM sanpham WHERE id_sanpham= $id";
$query_chitiet = mysqli_query($conn, $sql_chitiet);
$product = mysqli_fetch_assoc($query_chitiet);
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
            <li><a href="cartegory.html">Thương hiệu</a>
                <ul class="sub-menu">
                    <li><a href=""> Casio</a>
                        <ul>
                            <li><a href=""> EDIFICE</a></li>
                            <li><a href=""> G-SHOCK</a></li>
                            <li><a href=""> BABY-G</a></li>
                            <li><a href=""> SHEEN</a></li>
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
                            <li><a href=""> OPEN HEART</a></li>
                            <li><a href=""> C7</a></li>
                        </ul>
                    </li>
                    <li><a href=""> Orient</a>
                        <ul>
                            <li><a href=""> SUN and MOON</a></li>
                            <li><a href=""> ORIENT SK</a></li>
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
            <li> <input placeholder="tìm kiếm" type="text"><i class="fas fa-search"></i></li>
            <li> <a class="fa-solid fa-bag-shopping"></a></li>
            <li> <a href="taikhoan.html" class="fa-solid fa-user"></a></li>

        </div>
    </header>
</body>

<!-- -------product------ -->
<section class="product">
    <div class="container">
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-img">
                <img src="admin/QuanLySanPham/upload/<?php echo $product['hinhanh'] ?>" alt="">
                </div>

            </div>
            <div class="product-content-right">
                <?php
                // Kết nối CSDL và kiểm tra kết nối
                include('./admin/config.php');
                $id = $_GET['id'];
                $sql_chitiet = "SELECT * FROM sanpham WHERE id_sanpham= $id";
                $query_chitiet = mysqli_query($conn, $sql_chitiet);
                $product = mysqli_fetch_assoc($query_chitiet); //alt+shift+F
                ?>
                </div>
                 <div class="product-content-right-product-name">
                    <h1><?= $product['tensanpham']?></h1>
                </div>
                <div class="product-content-right-product-pricr">
                    <p><?= $product['giatien']?><sup>đ</sup></p>
                </div>
                <div class="machine">
                    <h3>Loại máy: <?=$product['tomtat']?></h3>
                </div>
                <div class="product-content-right-product-button">
                    <button><i class="fa-solid fa-cart-shopping"></i>
                        <p>Thêm vào giỏ hàng</p>
                    </button>
                </div>
                <div class="product-content-right-product-icon ">
                    <div class="product-content-right-product-icon-item">
                        <i class="far fa-comments"></i>
                        <p>Hostline: 0779182032</p>
                    </div>
                    <div class="product-content-right-product-icon-item">
                        <i class="far fa-enveslope"></i>
                        <p>Mail: DH52005818@student.stu.edu.vn</p>
                        <i class="far fa-enveslope"></i>
                        <p>Mail: DH52005875@student.stu.edu.vn</p>
                    </div>
                </div>
                <div class="product-content-right-bottom-content-chitiet">
                    <h3><?= $product['noidung']?></h3>

                </div>

            </div>
        </div>
    </div>

</section>

<section class="product-related">
    <div class="product-related-title">
        <p>Sản phẩm liên quan</p>
    </div>
    <div class=" row product-content">
        <div class="product-related-item">
            <img src="img/dongho1.jpg" alt="">
            <h1>Casio MTP-1183E-7ADF</h1>
            <p>1.046.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="img/dongho1.jpg" alt="">
            <h1>Casio MTP-1183E-7ADF</h1>
            <p>1.046.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="img/dongho1.jpg" alt="">
            <h1>Casio MTP-1183E-7ADF</h1>
            <p>1.046.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="img/dongho1.jpg" alt="">
            <h1>Casio MTP-1183E-7ADF</h1>
            <p>1.046.000<sup>đ</sup></p>
        </div>

    </div>


</section>


<footer>
    <h5>THÔNG TIN LIÊN HỆ</h5>
    <b>Địa chỉ :176 Tô Hiến Thành,Phường 13,Quận 10</b><br>
    <div>Email :<a href="mailto:dh52005870@student.stu.edu.vn">DH52005818@student.stu.edu.vn</a></div>
    <div>Email :<a href="mailto:dh52006034@student.stu.edu.vn">DH52005875@student.stu.edu.vn</a>
        <div>
            <b>Tổng đài hỗ trợ : </b>
            <div> SĐT : <a href="tel:0779182032">0779182032</a> </div>
            <a href="" class="text-left"><img width="25px" height="25px" src="./img/facebook.png">facebook</a>
            <a href="" class="text-left" style="margin-left:50px;"><img width="35px" height="35px" src="./img/instagram.png ">Instagram</a>
</footer>

</html>