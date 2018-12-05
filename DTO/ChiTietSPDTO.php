<?php
    class ChiTietSPDTO
    {
        var $MaChitietSP;
        var $TenSP;
        var $ManHinh;
        var $CamTruoc;
        var $CamSau;
        var $RAM;
        var $ROM;
        var $CPU;
        var $GPU;
        var $Pin;
        var $HeDieuHanh;
        var $SIM;
        public function __construct()
        {
            $this->MaChitietSP = 0;
            $this->TenSP = '';
            $this->ManHinh = '';
            $this->CamTruoc = '';
            $this->CamSau = '';
            $this->RAM = '';
            $this->ROM = '';
            $this->CPU = '';
            $this->GPU = '';
            $this->Pin = 0;
            $this->HeDieuHanh = '';
            $this->SIM = 0;
        }
    }
?>