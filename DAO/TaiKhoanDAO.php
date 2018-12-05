<?php
Class TaiKhoanDAO extends DB
{
    public function GetAll()
    {
        $sql = "select MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, EMail, BiXoa, MaLoaiTaiKhoan from taikhoan";
        $result =$this->ExecuteQuery($sql);
        $lstTaiKhoan = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $taiKhoan= new TaiKhoanDTO();
            $taiKhoan->MaTaiKhoan = $MaTaiKhoan;
            $taiKhoan->TenDangNhap = $TenDangNhap;
            $taiKhoan->MatKhau = $MatKhau;
            $taiKhoan->TenHienThi = $TennHienThi;
            $taiKhoan->DiaChi = $DiaChi;
            $taiKhoan->EMail = $EMail;
            $taiKhoan->BiXoa = $BiXoa;
            $taiKhoan->MaLoaiTaiKhoan = $MaLoaiTaiKhoan;
            $lstTaiKhoan[]= $taiKhoan;
        }
        return $lstTaiKhoan;
    } 
    public function GetAllAvailable()
    {
        $sql = "select MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, EMail, BiXoa, MaLoaiTaiKhoan from taikhoan";
        $result = $this->ExecuteQuery($sql);
        $lstHangSanXuat = array();
        while( $row = mysqli_fetch_array($result))
        {
            extract($row);
            $taiKhoan= new TaiKhoanDTO();
            $taiKhoan->MaTaiKhoan = $MaTaiKhoan;
            $taiKhoan->TenDangNhap = $TenDangNhap;
            $taiKhoan->MatKhau = $MatKhau;
            $taiKhoan->TenHienThi = $TenHienThi;
            $taiKhoan->DiaChi = $DiaChi;
            $taiKhoan->EMail = $EMail;
            $taiKhoan->BiXoa = $BiXoa;
            $taiKhoan->MaLoaiTaiKhoan = $MaLoaiTaiKhoan;
            $lstTaiKhoan[]= $taiKhoan;
        }
        return $lstTaiKhoan;
    }
    public function GetByID($maTaiKhoan)
    {
        $sql = "select MaTaiKhoan, TenDangNhap, BiXoa from taikhoan";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
        return null;
        $row == mysqli_fetch_array($result); 
        extract($row);
        $taiKhoan= new TaiKhoanDTO();
        $taiKhoan->MaTaiKhoan = $MaTaiKhoan;
        $taiKhoan->TenDangNhap = $TenDangNhap;
        $taiKhoan->BiXoa = $BiXoa;
        return $taiKhoan;

    }
    public function Insert($taiKhoan)
    {
       $sql = "insert into taikhoan(TenDangNhap, BiXoa) values ('$taiKhoan->TenDangNhap', '$taiKhoan->Bixoa')";
       $this->ExecuteQuery($sql); 
    }
    public function Delete($taiKhoan)
    {
        $sql= "delete from taikhoan where MaTaiKhoan = $taiKhoan->MaTaiKhoan";
        $this->ExecuteQuery($sql);
    }
    public function SetDelete($taiKhoan)
    {
        $sql = "update taikhoan set BiXoa = 1 where $taiKhoan->MaTaiKhoan";
        $this->ExecuteQuery($sql);
    }
    public function UnsetDelete($taiKhoan)
    {
        $sql = "update taikhoan set BiXoa = 0 where $taiKhoan->MaTaiKhoan";
        $this->ExecuteQuery($sql);
    }
    public function Update($taiKhoan)
    {
        $sql = "update taikhoan set TenDangNhap = $taiKhoan->TenDangNhap, BiXoa = $taiKhoan->BiXoa where $taiKhoan->MaTaiKhoan";
        $this->ExecuteQuery($taiKhoan);
    }
    public function DemSoLuongTaiKhoanThuocTaiKhoan($maTaiKhoan)
    {
        $sql = "select count(MaTaiKhoan) from taikhoan where MaTaiKhoan=$maTaiKhoan";
        $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }
}
?>