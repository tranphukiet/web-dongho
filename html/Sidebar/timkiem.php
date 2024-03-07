<!-- 
<?php
include("../admin/config.php");
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}
$sql_prod = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ";
$query_prod = mysqli_query($conn, $sql_prod);
?>
<h3>Kết quả tìm kiếm: <?php ($_POST['tukhoa']);?></h3>
<ul class="product_list">
    <?php
    if (isset($query_prod)){}
    while ($row = mysqli_fetch_array($query_prod)) {
        ?>
        <li>
            <a href="main.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
                <img src="../admin/QuanLySanPham/Upload/<?php echo $row['hinhanh'] ?>" alt="">
                <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?>
                </p>
                <p class="price_product">Giá: <?php echo $row['giatien'] ?> vnđ
                </p>
                <p style="text-align: center;color:#d1d1d1"><?php echo $row['id_danhmuc'] ?></p>

            </a>
        </li>
        <?php
    }
    ?>
</ul> -->
<?php
include("../admin/config.php");
$tukhoa = $_GET['tukhoa'];
$sql_prod = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ";
$query_prod = mysqli_query($conn, $sql_prod);
?>
<h3>Kết quả tìm kiếm: <?php echo htmlspecialchars($tukhoa); ?></h3>
<ul class="product_list">
    <?php
    if ($query_prod && mysqli_num_rows($query_prod) > 0) {
        while ($row = mysqli_fetch_array($query_prod)) {
            ?>
            <li>
                <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
                    <img src="../admin/QuanLySanPham/Upload/<?php echo $row['hinhanh'] ?>" alt="">
                    <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?>
                    </p>
                    <p class="price_product">Giá: <?php echo $row['giatien'] ?> vnđ
                    </p>
                    <p style="text-align: center;color:#d1d1d1"><?php echo $row['id_danhmuc'] ?></p>
                </a>
            </li>
            <?php
        }
    } else {
        echo "<p>Không thể tìm kiếm.</p>";
    }
    ?>
</ul>