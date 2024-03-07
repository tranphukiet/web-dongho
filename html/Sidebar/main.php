<div id="main">
    <?php
        include("Sidebar.php");
    ?>


    <div class="main_content">
        <?php
        if(isset($_GET['quanli'])){
            $tam=$_GET['quanli'];
        }else{
            $tam='';
        }
        if($tam=='danhmucsanpham'){
            include('./admin/QuanLyDanhMuc');
        // }elseif($tam== 'giohang'){
        //     include('main/giohang.php');
        }
        elseif($tam== 'sanpham'){
            include('./sanpham.php');
        }
        elseif($tam== 'thanhtoan'){
            include('main/thanhtoan.php');
        }elseif($tam== 'taikhoan'){
            include('../taikhoan.php');
        }
        elseif($tam== 'timkiem'){
            include('timkiem.php');
        }
        elseif($tam== 'dangky'){
            include('./dangky.php');
        }else{
            include('../index.php');
        }
        ?>
    </div>

    <div class="clear">

    </div>
</div>