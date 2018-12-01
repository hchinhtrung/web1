<?php
    class LoaiSanPhamBUS
    {
        var $loaiSanPhamDAO;
        public function __construct()
        {
            $this->$loaiSanPhamDAO = new LoaiSanPhamDAO();
        }

        public function GetAll();
        {
            return $this->loaiSanPhamDAO->GetAll();
        }

        public function GetAllAvailable()
        {
            return $this->loaiSanPhamDAO->GetAllAvailable();
        }

        public function GetByID($maLoaiSanPham)
        {
            return $this->loaiSanPhamDAO->GetByID($maLoaiSanPham);
        }

        public function Insert($loaiSanPham)
        {
            $this->loaiSanPhamDAO->Insert($loaiSanPham)
        }

        public function InsertWithName($tenLoaiSanPham)
        {
            $loaiSanPham = new LoaiSanPhamDTO();
            $loaiSanPham->TenLoaiSanPham = $tenLoaiSanPham;
            $this->loaiSanPhamDAO->Insert($loaiSanPham);
        }
        public function Delete($maLoaiSanPham)
        {
            $loaiSanPham  = new LoaiSanPhamDTO();
            $loaiSanPham->MaLoaiSanPham = $maLoaiSanPham;
            $soSanPhamThuocLoai = $this->loaiSanPhamDAO->DemSoLuongSanPhamThuocLoai($maLoaiSanPham);
            if($soSanPhamThuocLoai == 0)
            {
                $this->loaiSanPhamDAO->Delete($loaiSanPham);
            }
            else
            {
                $this->loaiSanPhamDAO->SetDelete($loaiSanPham);
            }
        }
        public function SetDelete($maLoaiSanPham)
        {
            $loaiSanPham  = new LoaiSanPhamDTO();
            $loaiSanPham->MaLoaiSanPham = $maLoaiSanPham;
            $this->loaiSanPhamDAO->SetDelete($loaiSanPham);
        }
        public function UnsetDelete($maLoaiSanPham)
        {
            $loaiSanPham  = new LoaiSanPhamDTO();
            $loaiSanPham->MaLoaiSanPham = $maLoaiSanPham;
            $this->loaiSanPhamDAO->UnsetDelete($loaiSanPham);
        }
        public function Update($TenLoaiSanPham)
        {
            $loaiSanPham  = new LoaiSanPhamDTO();
            $loaiSanPham->TenLoaiSanPham = $TenLoaiSanPham;
            $this->loaiSanPhamDAO->Update($loaiSanPham);
        }
    }
?>