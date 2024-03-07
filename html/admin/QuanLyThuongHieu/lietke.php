<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>

<?php
$sql_lietke_thuonghieu = "SELECT * FROM  thuonghieu,danhmuc WHERE thuonghieu.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_thuonghieu DESC";
$query_lietke_thuonghieu = mysqli_query($conn,$sql_lietke_thuonghieu);
?>
<h2>Liệt kê thương hiệu</h2>
<table  border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên thương hiệu</th>
        <th>Tên Danh mục</th>
        <th>Mã thương hiệu</th>

    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_thuonghieu)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenthuonghieu'] ?></td>

            
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td><?php echo $row['mathuonghieu'] ?></td>
                <!-- <a href="admin/quanlisanpham/xuly.php?idsanpham=<?php echo $row['id_thuonghieu'] ?>">Xóa</a> | <a href="
                ?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_thuonghieu'] ?>">Sửa</a> -->
                <a href="quanlythuonghieu/xoa.php?idthuonghieu=<?php echo $row['id_thuonghieu'] ?>">Xóa</a> | <a href="
                ?action=quanlithuonghieu&query=sua&idthuonghieu=<?php echo $row['id_thuonghieu'] ?>">Sửa</a>
                
            </td>

        </tr>
        <?php
    }
    ?>

</table>

