<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>

<?php
$sql_lietke_sanpham = "SELECT * FROM  sanpham,thuonghieu WHERE sanpham.id_thuonghieu=thuonghieu.id_thuonghieu ORDER BY id_sanpham DESC";
$query_lietke_sanpham = mysqli_query($conn,$sql_lietke_sanpham);
?>
<h2>Liệt kê sản phẩm</h2>
<table  border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thương hiệu</th>
        <th>Mã sản phẩm</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham'] ?></td>

            <td><img src="QuanLySanPham/Upload/<?php echo $row['hinhanh'] ?>" alt="Hình ảnh sản phẩm" width="150px"></td>
            <td><?php echo $row['giatien'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo $row['tenthuonghieu'] ?></td>
            <td><?php echo $row['masanpham'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><?php if($row['tinhtrang']==1){
                echo 'Kích hoạt';
            }else{
                echo 'Ẩn';
            }  ?></td>

            <td>
                <!-- <a href="admin/quanlisanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="
                ?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> -->
                <a href="quanlysanpham/xoa.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="
                ?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                
            </td>

        </tr>
        <?php
    }
    ?>

</table>

