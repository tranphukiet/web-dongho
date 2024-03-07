<?php
include ("config.php");
session_start();
if (!isset($_SESSION["dangnhap"])) {
    header('Location:dangnhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body, h3, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.title_admincp {
    text-align: center;
    padding: 20px 0;
    background-color: #333;
    color: #fff;
}

.wraper {
    width: 80%;
    margin: 20px auto;
}

.admincp_list {
    list-style: none;
    padding: 0;
}

.admincp_list li {
    margin-bottom: 10px;
}

.admincp_list li a {
    display: block;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
    text-decoration: none;
    color: #333;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.admincp_list li a:hover {
    background-color: #f4f4f4;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="style.css">
    <title>Admincp</title>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script> -->
</head>

<body>
    <h3 class="title_admincp">Welcome to ADMIN</h3>
    <div class="wraper">
        
    <ul class="admincp_list">
        <li><a href="main.php?action=quanlidanhmucsanpham&query=them">Quản lí danh mục sản phẩm</a></li>
        <li><a href="main.php?action=quanlithuonghieu&query=them">Quản lí thương hiệu</a></li>
        <li><a href="main.php?action=quanlisanpham&query=them">Quản lí sản phẩm</a></li>
          <li> <a href="dangxuat.php">Đăng xuất</a></li> 
    
    </ul>
    </div>
   

    
</body>

</html>