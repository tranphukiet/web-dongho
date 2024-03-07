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
            background-color: #f4f4f4;
        }

        .wraper_chitiet {
            display: flex;
            border: 1px solid #ddd;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
        }

        .hinhanh_sanpham {
            flex: 1;
        }

        .hinhanh_sanpham img {
            width: 100px;
            height: auto;
            display: block;
        }

        .chitiet_sanpham {
            flex: 1;
            padding: 15px;
        }

        h3, p {
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .themgiohang {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .themgiohang:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
include("../html/admin/config.php");
$sql_chitiet = "SELECT * FROM sanpham JOIN danhmuc on sanpham.id_danhmuc = danhmuc.id_danhmuc";
$query_chitiet = mysqli_query($conn, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
    <div class="wraper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="100%" src="admin/QuanLySanPham/upload/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
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
</body>
</html>
  