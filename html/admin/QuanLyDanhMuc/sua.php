<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
 }
?>
<?php
    $sql_sua_danhmuc = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($conn, $sql_sua_danhmuc);
?>
<p>Sửa danh mục sản phẩm</p>
<form method="POST" action="QuanLyDanhMuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmuc)) {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" ></td>
        </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr>
        </table>
        <?php
        }
        ?> 
    </form>