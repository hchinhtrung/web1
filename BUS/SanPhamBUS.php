<?php
    class SanPhamBUS
    {
        var $sanPhamDAO;
        public function __construct()
        {
             $this->sanPhamDAO = new SanPhamDAO();
        }

        public function GetAll()
        {
            return $this->sanPhamDAO->GetAll();
        }

        public function GetAllAvailable()
        {
            return $this->sanPhamDAO->GetAllAvailable();
        }
        public function GetTopToDate()
        {
            return $this->sanPhamDAO->GetTopToDate();
        }
        public function GetTopToSoLuongBan()
        {
            return $this->sanPhamDAO->GetTopToSoLuongBan();  
        }
        public function GetByID($maSanPham)
        {
            return $this->sanPhamDAO->GetByID($maSanPham);
        }
        public function GetSoLuongTon($maSanPham)
        {
            $sanPham = $this->sanPhamDAO->GetByID($maSanPham);
            return $sanPham->SoLuongTon;
        }
        public function GetSoLuongBan($maSanPham)
        {
            $sanPham = $this->sanPhamDAO->GetByID($maSanPham);
            return $sanPham->SoLuongBan;
        }
        public function GetSoLuotXem($maSanPham)
        {
            $sanPham = $this->sanPhamDAO->GetByID($maSanPham);
            return $sanPham->SoLuotXem;
        }
        public function GetByHSX_LSP($mahsx, $maloaisp)
        {
            return $this->sanPhamDAO->GetByHSX_LSP($mahsx, $maloaisp);
        }
        public function GetTop5OfHSX_LSP($mahsx, $maloaisp)
        {
            return $this->sanPhamDAO->GetTop5OfHSX_LSP($mahsx, $maloaisp);
        }
        public function GetByLSP($maloaisp)
        {
            return $this->sanPhamDAO->GetByLSP($maloaisp);
        }
        public function Insert($sanPham)
        {
            $this->sanPhamDAO->Insert($sanPham);
        }
        public function InsertWithName($tenSanPham)
        {
            $sanPham = new sanPhamDTO();
            $sanPham->TenSanPham=$tenSanPham;
            $this->sanPhamDAO->Insert($sanPham);
        }

        public function Delete($maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham->MaSanPham = $maSanPham;
            $soSanPham = $this->sanPhamDAO->DemSoLuongSanPham($maSanPham);
            if($soSanPham == 0)
            {
                $this->sanPhamDAO->Delete($sanPham);
            }
            else
            {
                $this->sanPhamDAO->SetDelete($sanPham);
            }
        }
        public function SetDelete($maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham->MaSanPham = $maSanPham;
            $this->sanPhamDAO->SetDelete($sanPham);
        }
        public function UnsetDelete($maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham->MaSanPham = $maSanPham;
            $this->sanPhamDAO->UnsetDelete($sanPham);
        }
        public function UpdateTenSanPham($tenSanPham, $maSanPham)
        {
            $sanPham  = new SamPhamDTO();
            $sanPham = $this->GetByID($maSanPham);
            if($sanPham == null)
            {
                return null;
            }
            else
            {
                $sanPham->TenSanPham = $tenSanPham;
                return $this->sanPhamDAO->Update($sanPham);
            }
        }
        public function UpdateSoLuongTon($soLuong, $maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham = $this->GetByID($maSanPham);
            if($sanPham == null)
            {
                return null;
            }
            else
            {
                $sanPham->SoLuongTon = $soLuong;
                return $this->sanPhamDAO->Update($sanPham);
            }
        }
        public function UpdateSoLuongBan($soLuong, $maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham = $this->GetByID($maSanPham);
            if($sanPham == null)
            {
                return null;
            }
            else
            {
                $sanPham->SoLuongBan += $soLuong;
                return $this->sanPhamDAO->Update($sanPham);
            }
        }
        public function UpdateSoLuotXem($soLuot, $maSanPham)
        {
            $sanPham  = new SanPhamDTO();
            $sanPham = $this->GetByID($maSanPham);
            if($sanPham == null)
            {
                return null;
            }
            else
            {
                $sanPham->SoLuotXem = $soLuot;
                return $this->sanPhamDAO->Update($sanPham);
            }
        }
    }
?>