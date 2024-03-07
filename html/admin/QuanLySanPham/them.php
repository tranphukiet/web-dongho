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
<p>Thêm sản phẩm</p>
<form method="POST" action="QuanLySanPham/xuly.php" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giatien"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
            
        </tr>
        
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr> 
            <td>Tóm tắt</td> 
            <td><textarea rows="10" name="tomtat" style="resize: none"> </textarea></td>
        </tr>
        
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
        </tr> 
      
     
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>THương hiệu</td>
            <td>
                <select name="thuonghieu">
                    <?php
                    $sql_thuonghieu="SELECT * FROM thuonghieu ORDER BY id_thuonghieu DESC";
                    $query_thuonghieu=mysqli_query($conn,$sql_thuonghieu);
                    while($row_thuonghieu=mysqli_fetch_array($query_thuonghieu)){
                    ?>
                    <option value="<?php echo $row_thuonghieu['id_thuonghieu']?>"><?php echo $row_thuonghieu['tenthuonghieu']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </table>
</form>
<script>
        function validateForm() {
            var tensanpham = document.forms["myForm"]["tensanpham"].value;
            var masanpham = document.forms["myForm"]["masanpham"].value;
            var giatien = document.forms["myForm"]["giatien"].value;
            var hinhanh = document.forms["myForm"]["hinhanh"].value;
            var soluong = document.forms["myForm"]["soluong"].value;

            if (isEmpty(tensanpham)) {
                alert("Tên sản phẩm không được để trống");
                return false;
            }
            if (isEmpty(masanpham)) {
                alert("Mã sản phẩm không được để trống");
                return false;
            }
            if (isEmpty(giatien)) {
                alert("Giá tiền không được để trống");
                return false;
            }
            if (isEmpty(hinhanh)) {
                alert("hình ảnh không được để trống");
                return false;
            }
            if (isEmpty(soluong)) {
                alert("số lượng không được để trống");
                return false;
            }

        }

        function isEmpty(value) {
            return value.trim() === "";
        }
    </script>



