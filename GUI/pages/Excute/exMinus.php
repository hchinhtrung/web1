<?php
if(isset($_SESSION['GioHang']))
{
    if(isset($_GET['masp']))
    {
        $gioHang = new GioHangBUS();
        $gioHang->Minus($_GET['masp']);
        echo '<script> window.location = "index.php?a=12"; </script>';    }
}
?>