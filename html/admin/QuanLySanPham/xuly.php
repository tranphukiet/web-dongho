<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}




$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$giatien = $_POST['giatien'];


//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;

$soluong = $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$thuonghieu = $_POST['thuonghieu'];

if (isset($_POST['themsanpham']))
 {
    //them
    $sql_them = "INSERT INTO sanpham(tensanpham,masanpham,giatien,hinhanh,soluong,tomtat,noidung,tinhtrang,id_thuonghieu)
     VALUE('" . $tensanpham . "', '" . $masanpham . "','" . $giatien . "','" . $hinhanh . "','" . $soluong . "',
     '" . $tomtat . "','" . $noidung . "','" . $tinhtrang . "','" . $thuonghieu . "')";
     if (mysqli_query($conn, $sql_them)) {
        // Thành công - Dữ liệu đã được thêm vào cơ sở dữ liệu
        move_uploaded_file($hinhanh_tmp, 'Upload/' . $hinhanh);
        header('Location: ../main.php?action=quanlisanpham&query=them');
        exit();
    } else {
        // Lỗi: hiển thị thông báo lỗi SQL
        echo "Lỗi: " . mysqli_error($conn);
    }
    //move_uploaded_file($hinhanh_tmp, 'Upload/' . $hinhanh);
    //header('Location:../main.php?action=quanlisanpham&query=them');
}
//sua san pham
 elseif (isset($_POST['suasanpham'])) 
 {
    //sua
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'Upload/' . $hinhanh);
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', masanpham='" . $masanpham . "',
    giatien='" . $giatien . "', hinhanh='" . $hinhanh . "', soluong='" . $soluong . "', tomtat='" . $tomtat . "',
    noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "',id_thuonghieu='" . $thuonghieu . "' WHERE id_sanpham='$_GET[idsanpham]'";

    } else {
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', masanpham='" . $masanpham . "',
    giatien='" . $giatien . "', soluong='" . $soluong . "', tomtat='" . $tomtat . "',
    noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "',id_thuonghieu='" . $thuonghieu . "' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($conn, $sql_update);
    header('Location:../main.php?action=quanlisanpham&query=them');

 }
?>
