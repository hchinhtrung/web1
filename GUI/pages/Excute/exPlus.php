<?php
if(isset($_SESSION['GioHang']))
{
    if(isset($_GET['masp']))
    {
        $gioHang = new GioHangBUS();
        $gioHang->Plus($_GET['masp']);
        echo '<script> window.location = "index.php"; </script>';
    }
}
?>