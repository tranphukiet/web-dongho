<?php
include("../admin/config.php");

?>
 <link rel="stylesheet" href="../main.css">
<div class="sidebar">
    <ul class="list_sidebar">
         <?php
        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
        while ($row = mysqli_fetch_array($query_danhmuc)) {
        ?>  
            <li><a href=".main.php?quanli=quanlydanhmuc&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
        <?php
        }
        ?>

        </ul>
    </div>