<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}

$tenthuonghieu = $_POST['tenthuonghieu'];
$mathuonghieu = $_POST['mathuonghieu'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themthuonghieu']))
 {
    //them
    $sql_them = "INSERT INTO thuonghieu(tenthuonghieu,mathuonghieu,id_danhmuc)
     VALUE('" . $tenthuonghieu . "', '" . $mathuonghieu . "','" . $danhmuc . "')";
     if (mysqli_query($conn, $sql_them)) {
        // Thành công - Dữ liệu đã được thêm vào cơ sở dữ liệu
        
        header('Location: ../main.php?action=quanlithuonghieu&query=them');
        exit();
    } else {
        // Lỗi: hiển thị thông báo lỗi SQL
        echo "Lỗi: " . mysqli_error($conn);
    }
    //move_uploaded_file($hinhanh_tmp, 'Upload/' . $hinhanh);
    //header('Location:../main.php?action=quanlisanpham&query=them');
}
//sua san pham
 elseif (isset($_POST['suathuonghieu'])) 
 {
    //sua
   
        $sql_update = "UPDATE thuonghieu SET tenthuonghieu='" . $tenthuonghieu . "', mathuonghieu='" . $mathuonghieu . "'
        ,id_danhmuc='" . $danhmuc . "' WHERE id_thuonghieu='$_GET[idthuonghieu]'";
    
    mysqli_query($conn, $sql_update);
    header('Location:../main.php?action=quanlithuonghieu&query=them');

 }
?>

