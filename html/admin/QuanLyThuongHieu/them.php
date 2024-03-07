<?php
$conn = new mysqli("localhost","root","","dongho");
if($conn->connect_error){
    echo "ket noi that bai".$conn->connect_error;
    exit();
}
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
    width: calc(100% - 22px); /* 22px để điều chỉnh kích thước input theo kích thước của table cell */
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
</style>
<p>Thêm Thương Hiệu</p>
<form method="POST" action="QuanLyThuongHieu/xuly.php" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
    <table border="1" width="50%" style="border-collapse: collapse;">
    <tr>
            <td>Tên thương hiệu</td>
            <td><input type="text" name="tenthuonghieu"></td>
        </tr>
        <tr>
            <td>Mã thương hiệu</td>
            <td><input type="text" name="mathuonghieu"></td>
        </tr>
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
            <td colspan="2"><input type="submit" name="themthuonghieu" value="Thêm Thương hiệu"></td>
        </tr>
    </table>
</form>

<script>
        function validateForm() {
            var tenthuonghieu = document.forms["myForm"]["tenthuonghieu"].value;
            var mathuonghieu = document.forms["myForm"]["mathuonghieu"].value;
            
            if (isEmpty(tenthuonghieu)) {
                alert("Tên sản phẩm không được để trống");
                return false;
            }
            if (isEmpty(mathuonghieu)) {
                alert("Mã sản phẩm không được để trống");
                return false;
            }
            
        }

        function isEmpty(value) {
            return value.trim() === "";
        }
    </script>