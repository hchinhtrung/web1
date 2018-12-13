<?php
    if(isset($_GET['masp']))
    {
        $sanPhamBUS = new SanPhamBUS();
        $masp = $_GET['masp'];
        $sanPhamBUS->UpdateSoLuotXem($sanPhamBUS->GetSoLuotXem($masp) - 1, $masp);
        if($sanPhamBUS->GetSoLuongTon($masp) < 1)
        {
            echo "<script> alert('Out of stock!');
            window.location.href = 'index.php?a=4&masp=$masp';</script>";
        }
        else
        {
                $gioHangBUS = new GioHangBUS();
                $gioHangBUS->Insert($masp);
        }
    }
?>