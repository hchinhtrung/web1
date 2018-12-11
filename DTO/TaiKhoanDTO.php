<?php
class TaiKhoanDTO
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $NgaySinh;
    var $MatKhau;
    var $TenHienThi;
    var $DiaChi;
    var $DienThoai;
    var $Email;
    var $BiXoa;
    var $MaLoaiTaiKhoan;
    public function __construct()
    {
        $this->MaTaiKhoan = null;
        $this->TenDangNhap = '';
        $this->MatKhau = '';
        $this->TenHienThi = '';
        $this->DiaChi = '';
        $this->NgaySinh = getdate();
        $this->DienThoai = '';
        $this->Email = '';
        $this->BiXoa = 0;
        $this->MaLoaiTaiKhoan = 2;
    }
}
?>