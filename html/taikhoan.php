<?php
session_start();
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PhanTran-Watch</title>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/79869bac10.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">
        

    </head>

    <body>
            <div id="wrapper">
              <form action="" method="POST">
                <h3> Đăng nhập</h3>
                <div class="form-group">
                    <input type="text" name="tendangnhap" required>
                    <label for="">Tên đăng nhập</label>
                    </div> 
                        <div class="form-group">
                            <input type="password" name="matkhau" required> 
                            <label for="">Mật Khẩu</label>
                        </div>
                        <input type="submit"name ="dangnhap" value="Đăng nhập" id="btn-login" >
                            <div class = "part-end">
                                 <tr >
                                 <td colspan="2" style="text-align:right;">
                                    <a href="quenmatkhau.php">Quên mật khẩu?</a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td colspan="2" align="center">
                                    <br/>
                                     <a href="dangky.php">Đăng ký ngay</a>
                                </td>
                                    </tr>
                            </div>
                </from>
                <?php
if (isset($_POST['dangnhap'])){
   //kiem tra xem 'email' da duoc gui hay chua
    if (isset ($_POST['tendangnhap'])){
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau =md5($_POST['matkhau']);
        $sql = "SELECT * FROM dangky WHERE tendangnhap='".$tendangnhap."' AND matkhau = '".$matkhau."' LIMIT 1";//lay truy van tren database va so ten dang nhap va mat khau
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        
        // Su dung mysqli_fetch_assoc de lay du lieu tu ket qua truy van
        if ($count > 0){
            $_SESSION['islogin']=1;
            $row = mysqli_fetch_assoc($result);
            $_SESSION['dangky'] = $row['tenkhachhang'];
            header('Location: index.php?quanli=index');
        }else {
            echo '<p style ="color:red">Tên tài khoản hoặc mật khẩu đã sai</p>';
        }

    } else{
        echo '<p style ="color:red">Vui lòng nhập lại</p>';
    } 
}

?>
            </div>
            <div>

                
            </div>
    </body>

    <footer>
        <h5>THÔNG TIN LIÊN HỆ</h5>
        <b>Địa chỉ :176 Tô Hiến Thành,Phường 13,Quận 10</b><br>
        <div>Email :<a href="mailto:dh52005870@student.stu.edu.vn">DH52005818@student.stu.edu.vn</a></div> 
        <div>Email :<a href="mailto:dh52006034@student.stu.edu.vn">DH52005875@student.stu.edu.vn</a><div>
        <b>Tổng đài hỗ trợ : </b> 
        <div> SĐT : <a href="tel:0779182032">0779182032</a> </div>
        <a href="" class="text-left" ><img width="25px" height="25px" src="./img/facebook.png">facebook</a>
        <a href="" class="text-left" style="margin-left:50px;" ><img width="35px"height ="35px" src="./img/instagram.png ">Instagram</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</html>

 

