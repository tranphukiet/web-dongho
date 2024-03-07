<p>Chi tiết sản phẩm</p>
<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>
<?php
$sql_chitiet = "SELECT * FROM danhmuc,sanpham WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc 
AND sanpham.id_sanpham='$_GET[sanpham]' LIMIT 1";
$query_chitiet = mysqli_query($conn, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
    <div class="wraper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="100%" src="admin/QuanLySanPham/Upload/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="chitiet_sanpham">
                <h3>Tên sản phẩm:
                    <?php echo $row_chitiet['tensanpham'] ?>
                </h3>
                <p>Mã sản phẩm:
                    <?php echo $row_chitiet['masanpham'] ?>
                </p>
                <p>Giá Sản phẩm:
                    <?php echo $row_chitiet['giatien'] ?>vnđ
                </p>
                <p>Số lượng:
                    <?php echo $row_chitiet['soluong'] ?>
                </p>
                <p>Danh mục:
                    <?php echo $row_chitiet['tendanhmuc'] ?>
                </p>
                <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"> </p>
            </div>
        </form>

    </div>

    <?php
}
?>