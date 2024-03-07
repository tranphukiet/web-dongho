<?php
   include("admin/config.php");

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhanTran-Watch</title>
    <script src="https://kit.fontawesome.com/79869bac10.js"></script>
    <link rel="stylesheet"type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <title>Đăng ký</title>
</head>
<header>
<div class="logo">
    <a href="index.php"><img  height="100px" width="100px" src="img/logo.png" alt="logo"></a>
    
</header>


<body>
    <div>
      <table id="from-dangky">
        <form action="" method="POST">
        <tr>
            <td colspan="2" align="center"><h4>ĐĂNG KÝ</h4></td></tr></td></tr>
            <tr>
                <td>Họ và tên</td>
                <td><input  id="txt" type="text" name="tenkhachhang" size="30"></td>
            </tr>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input  id="txt" type="text" name="tendangnhap" size="30" required/> </td>
            </tr>
            <tr >
                <td class="txt">Mật Khẩu</td>
                <td><input type="password"  id="password" name="matkhau" size="30"required/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input id="txt" type="email" name="email" size="30" required></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input  id="txt" type="number" name="sdt" size="15"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input  id="txt" type="text" name="diachi" size="30"></td>
                <tr>
                    
                    <td colspan="2" align="center">
                            <br/><input type="submit" class="btn-dangky" name="dangky1" value="Tạo tài Khoản"/><br>
                    </td>
                </tr>
            </tr>
            <?php
if(isset($_POST['dangky1'])){
$tenkhachhang = $_POST['tenkhachhang'];
$tendangnhap = $_POST['tendangnhap'];
$matkhau = md5($_POST['matkhau']); 
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];
$sql =mysqli_query($conn,"INSERT INTO dangky(tenkhachhang, tendangnhap, matkhau,email,sdt,diachi)
 VALUES ('".$tenkhachhang."','".$tendangnhap."','".$matkhau."','".$email."','".$sdt."','".$diachi."')");
if($sql){
    echo '<p class ="p-create">Đăng kí thành công</p>';
    header('Localtion: taikhoan.php');
}
}
?>

        </form>
      </table>
    </div>
    <footer>
        <h5>THÔNG TIN LIÊN HỆ</h5>
        <b>Địa chỉ :176 Tô Hiến Thành,Phường 13,Quận 10</b><br>
        <div>Email :<a href="mailto:dh52005870@student.stu.edu.vn">DH52005818@student.stu.edu.vn</a></div> 
        <div>Email :<a href="mailto:dh52006034@student.stu.edu.vn">DH52005875@student.stu.edu.vn</a><div>
        <b>Tổng đài hỗ trợ : </b> 
        <div> SĐT : <a href="tel:0779182032">0779182032</a> </div>
        <a href="" class="text-left" ><img width="25px" height="25px" src="./img/facebook.png.jpg">facebook</a>
        <a href="" class="text-left" style="margin-left:50px;" ><img width="35px"height ="35px" src="./img/instagram.png ">Instagram</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>