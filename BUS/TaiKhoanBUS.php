<?php
class TaiKhoanBUS
{
    var $taiKhoanDAO;
    public function __construct()
    {
        $this->$taiKhoanDAO = new TaiKhoanDAO();
    }

    public function GetAll()
    {
        return $this->taiKhoanDAO->GetAll();
    }

    public function GetAllAvailable()
    {
        return $this->taiKhoanDAO->GetAllAvailable();
    }

    public function GetByID($maTaiKhoan)
    {
        return $this->taiKhoanDAO->GetByID($maTaiKhoan);
    }
    public function Insert($taiKhoan)
    {
        $this->taiKhoanDAO->Insert($taiKhoan);
    }
    public function InsertWithName($tenDangNhap)
    {
        $taiKhoan = new taiKhoanDTO();
        $taiKhoan->TenDangNhap = $tenDangNhap;
        $this->taiKhoanDAO->Insert($taiKhoan);
    }

    public function Delete ($maTaiKhoan)
    {
        $taiKhoan = new TaiKhoanDTO();
        $taiKhoan->maTaiKhoan = $maTaiKhoan;
            $this->taiKhoanDAO->Delete($taiKhoan);
    }

    public function SetDelete ($maTaiKhoan)
    {
        $taiKhoan = new TaiKhoanDTO();
        $taiKhoan->MaTaiKhoan == $maTaiKhoan;
        $this->TaiKhoanDAO->SetDelete($taiKhoan);
    }

    public function UnsetDelete($maTaiKhoan)
    {
        $taiKhoan = new TaiKhoanDAO();
        $taiKhoan->MaTaiKhoan = $maTaiKhoan;
        $this->TaiKhoanDAO->UnsetDelete($taiKhoan);
    }

    public function Update($tenDangNhap)
    {
        $taiKhoan = new TaiKhoanDTO();
        $taiKhoan->TenDangNhap= $tenDangNhap;
        $this->TaiKhoanDAO->Update($taiKhoan);
    }
}
?>