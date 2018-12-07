<?php
class TaiKhoanDTO
{
    var $MaSanPham;
    var $TenSanPham;
    var $BiXoa;
    public function __construct()
    {
        $this->MaSanPham = 0;
        $this->TenSanPham = '';
        $this->BiXoa = 0;
    }
}
?>