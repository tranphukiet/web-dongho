<?php
session_start();
//session_unset();
include("config.php");
if(isset($_POST['dangnhap'])){
    $tendangnhap=$_POST['username'];
    $matkhau=md5($_POST['password']);
    $sql="SELECT * FROM admin WHERE tendangnhap='".$tendangnhap."' AND matkhau='".$matkhau."' LIMIT 1";
    $row=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($row);
    if($count> 0){
        $_SESSION['dangnhap']=$tendangnhap;
        header('Location:quanli.php');
    }else{
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng");</script>';
        // header('Location:dangnhap.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.wraper_login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.table_login {
    width: 300px;
    border: 1px solid #ccc;
    border-collapse: collapse;
    background-color: #fff;
}

.table_login td {
    padding: 10px;
    border: 1px solid #ccc;
}

.table_login h3 {
    margin: 0;
    padding: 10px;
    background-color: #333;
    color: white;
}

input[type="text"],
input[type="password"],
input[type="submit"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #333;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #555;
}
    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập ADMIN</title>
</head>

<body>
<div class="wraper_login">
    <form action="" autocomplete="" method="POSt">
        <table border="1" class="table_login" style="text-align:center;border-collapse:collapse;">
            <tr>
                <td colspan="2">
                    <h3>Đăng nhập ADMIN</h3>
                </td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>

</html>
