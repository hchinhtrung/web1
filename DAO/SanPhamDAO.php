<?php
Class SanPhamDAO extends DB
{
    public function GetAll()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat from sanpham";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $sanPham->NgayNhap = $NgayNhap;
            $sanPham->SoLuongTon = $SoLuongTon;
            $sanPham->SoLuongBan = $SoLuongBan;
            $sanPham->SoLuotXem = $SoLuotXem;
            $sanPham->Mota = $MoTa;
            $sanPham->BiXoa = $BiXoa;
            $sanPham->MaLoaiSanPham = $MaLoaiSanPham;
            $sanPham->MaHangSanXuat = $MaHangSanXuat;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    } 
    public function GetAllAvailable()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham where BiXoa = 0";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetTopToDate()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham order by NgayNhap desc limit 10";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetTopToSoLuongBan()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham order by SoLuongBan desc limit 10";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetByHSX_LSP($mahsx, $maloaisp)
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham sp where MaHangSanXuat = $mahsx and MaLoaiSanPham = $maloaisp and BiXoa = 0";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetTop5OfHSX_LSP($mahsx, $maloaisp)
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham sp where MaHangSanXuat = $mahsx and MaLoaiSanPham = $maloaisp and BiXoa = 0 limit 5";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetByLSP($maloaisp)
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham from sanpham sp where MaLoaiSanPham = $maloaisp and BiXoa = 0";
        $result =$this->ExecuteQuery($sql);
        $lstSanPham = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham=$TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $lstSanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetByID($maSanPham)
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham, SoLuongTon, SoLuotXem, BiXoa, MaLoaiSanPham, MaHangSanXuat  from sanpham where MaSanPham = $maSanPham";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
        {
            return null;
        }
        else
        {
            $row = mysqli_fetch_array($result); 
            extract($row);
            $sanPham= new SanPhamDTO();
            $sanPham->MaSanPham = $MaSanPham;
            $sanPham->TenSanPham = $TenSanPham;
            $sanPham->HinhURL=$HinhURL;
            $sanPham->GiaSanPham = $GiaSanPham;
            $sanPham->SoLuongTon = $SoLuongTon;
            $sanPham->SoLuotXem = $SoLuotXem;
            $sanPham->BiXoa = $BiXoa;
            $sanPham->MaLoaiSanPham = $MaLoaiSanPham;
            $sanPham->MaHangSanXuat = $MaHangSanXuat;
            return $sanPham;
        }

    }
    public function Insert($sanPham)
    {
       $sql = "insert into sanpham(TenSanPham, BiXoa) values ('$sanPham->TenSanPham', '$sanPham->BiXoa')";
       $this->ExecuteQuery($sql); 
    }
    public function Delete($sanPham)
    {
        $sql= "delete from sanpham where MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }
    public function SetDelete($sanPham)
    {
        $sql = "update sanpham set BiXoa = 1 where $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }
    public function UnsetDelete($sanPham)
    {
        $sql = "update sanpham set BiXoa = 0 where $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }
    public function Update($sanPham)
    {
        $sql = "update sanpham set TenSanPham = $sanPham->TenSanPham, BiXoa = $sanPham->BiXoa where $sanPham->MaSanPham";
        $this->ExecuteQuery($sanPham);
    }
    public function DemSoLuongSanPhamThuocSanPham($maSanPham)
    {
        $sql = "select count(MaSanPham) from sanpham where MaSanPham=$maSanPham";
        $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }
}
?>