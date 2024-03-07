<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}

$tenloaisp=$_POST['tendanhmuc'];
if(isset($_POST['themdanhmuc'])){
    //them
    $sql_them= "INSERT INTO danhmuc(tendanhmuc) VALUE('".$tenloaisp."')";
    mysqli_query($conn, $sql_them);
    header('Location:../main.php?action=quanlidanhmucsanpham&query=them');
}
elseif(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update= "UPDATE danhmuc SET tendanhmuc='".$tenloaisp."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($conn, $sql_update);
    header('Location:../main.php?action=quanlidanhmucsanpham&query=them');
}
else{ // ham xoa nam o day
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM danhmuc WHERE id_danhmuc='".$id."' ";
    mysqli_query($conn, $sql_xoa);
    header('Location:../main.php?action=quanlidanhmucsanpham&query=them');
}
?>