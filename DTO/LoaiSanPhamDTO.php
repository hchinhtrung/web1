<?php
    class LoaiSanPhamDTO
    {
        var $MaLoaiSanPham;
        var $TenLoaiSanPham;
        var $BiXoa;
        public function __construct()
        {
            $this->MaLoaiSanPham = 0;
            $this->TenLoaiSanPham = '';
            $this->BiXoa = 0;
        }

    }
?>