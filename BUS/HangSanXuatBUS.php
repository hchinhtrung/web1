<?php
    class HangSanXuatBUS
    {
        var $hangSanXuatDAO;
        public function __construct()
        {
            $this->$hangSanXuatDAO = new HangSanXuatDAO();
        }

        public function GetAll();
        {
            return $this->hangSanXuatDAO->GetAll();
        }

        public function GetAllAvailable()
        {
            return $this->hangSanXuatDAO->GetAllAvailable();
        }

        public function GetByID($maHangSanXuat)
        {
            return $this->hangSanXuatDAO->GetByID($maHangSanXuat);
        }

        public function Insert($hangSanXUat)
        {
            $this->hangSanXuatDAO->Insert($hangSanXUat)
        }

        public function InsertWithName($tenHangSanXuat)
        {
            $hangSanXuat = new HangSanXuatDTO();
            $hangSanXuat->TenHangSanXuat = $tenHangSanXuat;
            $this->hangSanXuatDAO->Insert($hangSanXuat);
        }
        public function Delete($maHangSanXuat)
        {
            $hangSanXuat  = new HnagSanXuatDTO();
            $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
            $soSanPhamThuocHang = $this->hangSanXuatDAO->DemSoLuongSanPhamThuocHang($maHangSanXuat);
            if($soSanPhamThuocHang == 0)
            {
                $this->hangSanXUatDAO->Delete($hangSanXuat);
            }
            else
            {
                $this->hangSanXuatDAO->SetDelete($hangSanXuat);
            }
        }
        public function SetDelete($maHangSanXuat)
        {
            $hangSanXuat  = new HnagSanXuatDTO();
            $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
            $this->hangSanXuatDAO->SetDelete($hangSanXuat);
        }
        public function UnsetDelete($maHangSanXuat)
        {
            $hangSanXuat  = new HangSanXuatDTO();
            $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
            $this->hangSanXuatDAO->UnsetDelete($hangSanXuat);
        }
        public function Update($tenHangSanXuat)
        {
            $hangSanXuat  = new HangSanXuatDTO();
            $hangSanXuat->TenHangSanXuat = $tenHangSanXuat;
            $this->hangSanXuatDAO->Update($hangSanXuat);
        }
    }
?>