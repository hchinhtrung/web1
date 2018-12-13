<?php
if(isset($_SESSION['GioHang']))
{
    if(isset($_GET['masp']))
    {
        $gioHang = new GioHangBUS();
        $gioHang->Minus($_GET['masp']);
        header("location:index.php?a=12");
    }
}
?>