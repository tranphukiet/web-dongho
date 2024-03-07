
<?php
include("../config.php");
$id = $_GET['idthuonghieu'];
// $sql="SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
// $query=mysqli_query($mysqli, $sql);
// while( $row = mysqli_fetch_array($query)) {
//     unlink('uploads/'.$row['hinhanh']);
// }
$sql_xoa = "DELETE FROM thuonghieu WHERE id_thuonghieu='" . $id . "' ";
mysqli_query($conn, $sql_xoa);
header('Location:../main.php?action=quanlithuonghieu&query=them');
?>