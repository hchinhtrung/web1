<?php
Class SanPhamDAO extends DB
{
    public function GetAll()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, MaLoaiSanPham, MaHangSanXuat from sanpham";
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
            $lstsanPham[]= $sanPham;
        }
        return $lstsanPham;
    } 
    public function GetAllAvailable()
    {
        $sql = "select MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, MaLoaiSanPham, MaHangSanXuat from sanpham";
        $result = $this->ExecuteQuery($sql);
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
            $lstsanPham[]= $sanPham;
        }
        return $lstSanPham;
    }
    public function GetByID($maSanPham)
    {
        $sql = "select MaSanPham, TenSanPham, BiXoa  from sanpham";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
        return null;
        $row == mysqli_fetch_array($result); 
        extract($row);
        $sanPham= new SanPhamDTO();
        $sanPham->MaSanPham = $MaSanPham;
        $sanPham->TenSanPham = $TenSanPham;
        $sanPham->BiXoa = $BiXoa;
        return $sanPham;

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