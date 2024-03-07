<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>
<?php
    $sql_sua_thuonghieu = "SELECT * FROM thuonghieu WHERE id_thuonghieu='$_GET[idthuonghieu]' LIMIT 1";
    $query_sua_thuonghieu = mysqli_query($conn, $sql_sua_thuonghieu);
?>
<?php
while($row=mysqli_fetch_array($query_sua_thuonghieu)){
?> 

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table td {
    padding: 10px;
    border: 1px solid #ccc;
}

table td:first-child {
    width: 30%;
    font-weight: bold;
}

input[type="text"],
input[type="file"],
textarea,
select {
    width: calc(100% - 22px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px;
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

textarea {
    resize: none;
}

img {
    max-width: 150px;
    height: auto;
    display: block;
    margin-top: 5px;
}
</style>
<p>Sửa thương hiệu</p>
<form method="POST" action="QuanLyThuongHieu/xuly.php?idsthuonghieu=<?php echo $row['id_thuonghieu']?>" enctype="multipart/form-data">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Tên thương hiệu</td>
            <td><input type="text" value="<?php echo $row['tenthuonghieu']?>" name="tenthuonghieu"></td>
        </tr>
        <tr>
            <td>Mã thương hiệu</td>
            <td><input type="text" value="<?php echo $row['mathuonghieu']?>" name="mathuonghieu"></td>
        </tr>
        <tr>
            
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc="SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc=mysqli_query($conn,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suathuonghieu" value="Sửa thương hiệu"></td>
        </tr>
    </table>
</form>
<?php
}
?>
