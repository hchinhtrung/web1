<?php
class TaiKhoanDTO
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $BiXoa;
    public function __construct()
    {
        $this->MaTaiKhoan = 0;
        $this->TenDangNhap = '';
        $this->BiXoa = 0;
    }
}
?>