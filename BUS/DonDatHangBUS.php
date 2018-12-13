<?php
    class DonDatHangBUS
    {
        var $donDatHangDAO;
        public function __construct()
        {
            $this->donDatHangDAO = new DonDatHangDAO();
        }
        public function GetAll()
        {
            return $this->donDatHang->GetAll();
        }
        public function GetByID($maDonDatHang)
        {
            return $this->donDatHangDAO->GetByID($maDonDatHang);
        }
        public function GetMaxID()
        {
            return $this->donDatHangDAO->GetMaxID();
        }
        public function Insert($donDatHang)
        {
            return $this->donDatHangDAO->Insert($donDatHang);
        }
        public function Update($donDatHang)
        {
            return $this->donDatHangDAO->Update($donDatHang);
        }
    }
?>