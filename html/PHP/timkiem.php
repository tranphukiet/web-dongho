<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>
<?php
// include ("../admin/config.php");
if(isset($_POST['timkiem'])){
    $tukhoa=$_POST['tukhoa'];
}
$sql_prod = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ";
$query_prod = mysqli_query($conn, $sql_prod);
?>
<h3>Kết quả tìm kiếm: <?php ($_POST['tukhoa']);?></h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_prod)) {
        ?>
        <li>
           
            <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
                <img src="html/admin/QuanLySanPham/upload/<?php echo $row['hinhanh'] ?>" alt="">
                <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?>
                </p>
                <p class="price_product">Giá: <?php echo $row['giatien'] ?> vnđ
                </p>
                <p style="text-align: center;color:#d1d1d1"><?php echo $row['id_danhmuc'] ?></p>

            </a>
            </form>
        </li>
        <?php
    }
    ?>
</ul>