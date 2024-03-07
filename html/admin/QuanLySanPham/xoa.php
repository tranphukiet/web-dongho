
<?php
include("../config.php");
$id = $_GET['idsanpham'];
// $sql="SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
// $query=mysqli_query($mysqli, $sql);
// while( $row = mysqli_fetch_array($query)) {
//     unlink('uploads/'.$row['hinhanh']);
// }
$sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "' ";
mysqli_query($conn, $sql_xoa);
header('Location:../main.php?action=quanlisanpham&query=them');
?>
