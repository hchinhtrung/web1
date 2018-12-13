<?php
    if(isset($_SESSION['GioHang']))
    {
        $gioHang = new GioHangBUS();
        $total = 0;
        $sanPhamBUS = new SanPhamBUS();
        foreach($_SESSION['GioHang'] as $key=>$value)
        { 
            $masp = $_SESSION['GioHang'][$key]['MaSanPham'];
            $soluong =  $_SESSION['GioHang'][$key]['SoLuong'];
            $sanPham = $sanPhamBUS->GetByID($masp);
            $tien = $soluong*$sanPham->GiaSanPham;
            $total += $tien;
        }
        $donDatHangBUS = new DonDatHangBUS();
        $donDatHang = new DonDatHangDTO();
        $donDatHang->MaDonDatHang = $gioHang->CreateID();
        $now = getdate();
        $donDatHang->NgayLap = $now['year']."-".$now['mon']."-".$now['mday']."-".$now['hours']."-".$now['minutes']."-".$now['seconds'];
        $donDatHang->TongThanhTien = $total;
        $donDatHang->MaTaiKhoan = $_SESSION['uid'];
        $donDatHang->MaTinhTrang = 1;
        $donDatHangBUS->Insert($donDatHang);
        $machitiet = (int)$donDatHang->MaDonDatHang * 100;
        $chiTietDonHang = new ChiTietDonDatHangDTO();
        $chiTietDonHangBUS = new ChiTietDonDatHangBUS();
        foreach($_SESSION['GioHang'] as $key=>$value)
        { 
            $masp = $_SESSION['GioHang'][$key]['MaSanPham'];
            $sanPhamBUS->UpdateSoLuongBan($sanPhamBUS->GetSoLuongBan($masp) + 1, $masp);
            $machitiet = $machitiet + 1;
            $chiTietDonHang->MaChiTietDonDatHang = (string)($machitiet);
            $chiTietDonHang->SoLuong =  $_SESSION['GioHang'][$key]['SoLuong'];
            $chiTietDonHang->GiaBan = $sanPhamBUS->GetByID($_SESSION['GioHang'][$key]['MaSanPham'])->GiaSanPham;
            $chiTietDonHang->MaDonDatHang = $donDatHang->MaDonDatHang;
            $chiTietDonHang->MaSanPham = $_SESSION['GioHang'][$key]['MaSanPham'];
            $check = $chiTietDonHangBUS->Insert($chiTietDonHang);
        }
        unset($_SESSION['GioHang']);
        echo "<script> alert('Order Success!');
        window.location.href = 'index.php?a=12';</script>";
    }
    else
    {
        echo "<script> alert('No Orders!');
        window.location.href = 'index.php?a=12';</script>";
    }
?>