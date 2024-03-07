<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
?>
<?php
    $sql_sua_sanpham = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sanpham = mysqli_query($conn, $sql_sua_sanpham);
?>
<?php
while($row=mysqli_fetch_array($query_sua_sanpham)){
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
<p>Sửa sản phẩm</p>
<form method="POST" action="QuanLySanPham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" value="<?php echo $row['masanpham']?>" name="masanpham"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" value="<?php echo $row['giatien']?>" name="giatien"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <td><img src="QuanLySanPham/Upload/<?php echo $row['hinhanh'] ?>" alt="Hình ảnh sản phẩm" width="150px"></td>
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
        </tr>
       
        
        <tr> 
            <td>Tóm tắt</td> 
            <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea></td>
        </tr> 
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <?php
                    if($row['tinhtrang'] == '1'){
                        ?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                    <?php
                    }else{
                    ?>
                    <option value="1" >Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Thương hiệu</td>
            <td>
                <select name="thuonghieu">
                <?php
$sql_danhmuc = "SELECT * FROM thuonghieu ORDER BY id_thuonghieu DESC";
$query_thuonghieu = mysqli_query($conn, $sql_danhmuc);

if ($query_thuonghieu) {
    while ($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)) {
        $id_thuonghieu = $row_thuonghieu['id_thuonghieu'];
        $tenthuonghieu = $row_thuonghieu['tenthuonghieu'];

        // Tránh các vấn đề với HTML entities
        $escaped_id = htmlspecialchars($id_thuonghieu);
        $escaped_tenthuonghieu = htmlspecialchars($tenthuonghieu);

        // Đảm bảo rằng dữ liệu không rỗng trước khi sử dụng
        if (!empty($escaped_id) && !empty($escaped_tenthuonghieu)) {
?>
            <option value="<?php echo $escaped_id ?>"><?php echo $escaped_tenthuonghieu ?></option>
<?php
        }
    }
} else {
    // Xử lý khi truy vấn không thành công
    echo "Không thể lấy dữ liệu từ cơ sở dữ liệu: " . mysqli_error($conn);
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </table>
</form>
<?php
}
?>
