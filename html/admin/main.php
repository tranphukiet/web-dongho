<div class="clear"></div>
<div class="main_admincp">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlidanhmucsanpham' && $query == 'them') {
        include('QuanLyDanhMuc/them.php');
        include('QuanLyDanhMuc/lietke.php');
    } elseif ($tam == 'quanlidanhmucsanpham' && $query == 'sua') {
        include('QuanLyDanhMuc/sua.php');
    } elseif ($tam == 'quanlithuonghieu' && $query == 'them') {
        include('QuanLyThuongHieu/them.php');
        include('QuanLyThuongHieu/lietke.php');
    }
    elseif ($tam == 'quanlithuonghieu' && $query == 'sua') {
        include('QuanLyThuongHieu/sua.php');
    } 
    elseif ($tam == 'quanlisanpham' && $query == 'them') {
        include('QuanLySanPham/them.php');
        include('QuanLySanPham/lietke.php');
    }
    elseif ($tam == 'quanlisanpham' && $query == 'sua') {
        include('QuanLySanPham/sua.php');
    }//else { 
    //     include('module/dashboard.php');
    // }
    
    ?>
</div>