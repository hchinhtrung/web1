<?php
    class ChiTietDonDatHangBUS{
        var $ChiTietDonDatHangDAO;
        public function __construct()
        {
            $this-> chiTietDonDatHangDAO = new ChiTietDonDatHangDAO();
        }

        public function GetAll()
        {

            return $this->chiTietDonDatHangDAO->GetAll();
        }

        public function GetAllAvailable()
        {
            return $this->chiTietDonDatHangDAO->GetAllAvailable();
        }

        public function GetByID($maChiTietDonDatHang)
        {
            return $this->chiTietDonDatHangDAO->GetByIDDonHang($maChiTietDonDatHang);
        }
        public function GetByIDDonDatHang($maDonDatHang)
        {
            return $this->chiTietDonDatHangDAO->GetByIDDonDatHang($maDonDatHang);
        }

        public function Insert($chiTietDonDatHang)
        {
            $this->chiTietDonDatHangDAO->Insert($chiTietDonDatHang);
        }

        public function Delete($maChiTietDonDatHang)
        {
            $chiTietDonDatHang = new ChiTietDonDatHangDTO();
            $chiTietDonDatHang->MaChiTietDonDatHang = $maChiTietDonDatHang;
            $soChiTietDonHang = $this->chiTietDonDatHangDAO->DemSoLuongDonDatHang($maChiTietDonHang);
            if($soDonHang == 0)
            {
                $this->chiTietDonDatHangDAO->Delete($chiTietDonDatHang);
            }
            else
            {
                $this->chiTietDonDatHangDAO->SetDelete($chiTietDonDatHang);
            }
        }
        public function SetDelete($maChiTietDonDatHang)
        {
            $chiTietDonDatHang = new ChiTietDonDatHangDTO();
            $chiTietDonDatHang->MaChiTietDonDatHang = $maChiTietDonDatHang;
            $this->ChiTietDonDatHangDAO->SetDelete($maChiTietDonDatHang);
        }
        public function UnsetDelete($maChiTietDonDatHang)
        {
            $chiTietDonDatHang = new ChiTietDonDatHangDTO();
            $chiTietDonDatHang->MaChiTietDonDatHang = $maChiTietDonDatHang;
            $this->ChiTietDonDatHangDAO->UnSetDelete($maChiTietDonDatHang);
        }

        public function Update($maChiTietDonDatHang)
        {
            $chiTietDonDatHang = new ChiTietDonDatHangDTO();
            $chiTietDonDatHang ->MaChiTietDonDatHang = $maChiTietDonDatHang;
            $this->ChiTietDonDatHangDAO->Update($maChiTietDonDatHang);
        }
    }

?>