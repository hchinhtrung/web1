<?php
    class HSXCuaLSPDTO
    {
        var $MaSanPham;
        var $TenSanPham;
        var $HinhURL;
        var $SoLuong;
        var $SoTien;

        public function __construct()
        {
            $this->MaSanPham = 0;
            $this->TenSanPham = "";
            $this->HinhURL = "";
            $this->SoLuong = 0;
            $this->SoTien = 0;
        }

    }
?>