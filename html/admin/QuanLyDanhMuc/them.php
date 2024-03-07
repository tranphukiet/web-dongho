<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 400px;
}

form p {
    font-size: 1.5em;
    margin-bottom: 20px;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table td {
    padding: 8px;
    border: 1px solid #ddd;
}

input[type="text"] {
    width: calc(100% - 16px);
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

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>

<body>
<p>Thêm danh mục sản phẩm</p>
<form method="POST" action="QuanLyDanhMuc/xuly.php" name="myForm" onsubmit="return validateForm()">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" value="" ></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
        </tr>
    </table>
</form>
<script>
        function validateForm() {
            var tentl = document.forms["myForm"]["tendanhmuc"].value;
            if (isEmpty(tentl)) {
                alert("Tên Thể Loại không được để trống");
                return false;
            }
        }

        function isEmpty(value) {
            return value.trim() === "";
        }
    </script>
</body>
</html>
