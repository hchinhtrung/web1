<?php
    class LoaiSanPhamDAO extends DB
    {
        public function GetAll()
        {
            $sql = "select MaLoaiSanPham, TenLoaiSanPham, BiXoa from LoaiSanPham";
            $result = $this->ExecuteQuery($sql);
            $lstLoaiSanPham = array();
            while( $row = mysqli_fetch_array($result))
            {
                extract($row);
                $loaiSanPham = new LoaiSanPhamDTO();
                $loaiSanPham->MaLoaiSanPham = $MaLoaiSanPham;
                $loaiSanPham->TenLoaiSanPham = $TenLoaiSanPham;
                $loaiSanPham->BiXoa = $BiXoa;
                $lstLoaiSanPham[] = $loaiSanPham;
            }
            return $lstLoaiSanPham;
        }
        public function GetAllAvailable()
        {
            $sql = "select MaLoaiSanPham, TenLoaiSanPham, BiXoa from LoaiSanPham where BiXoa = 0";
            $result = $this->ExecuteQuery($sql);
            $lstLoaiSanPham = array();
            while( $row = mysqli_fetch_array($result))
            {
                extract($row);
                $loaiSanPham = new LoaiSanPhamDTO();
                $loaiSanPham->MaLoaiSanPham = $MaLoaiSanPham;
                $loaiSanPham->TenLoaiSanPham = $TenLoaiSanPham;
                $loaiSanPham->BiXoa = $BiXoa;
                $lstLoaiSanPham[] = $loaiSanPham;
            }
            return $lstLoaiSanPham;
        }
        public function GetByID($maLoaiSanPham)
        {
            $sql = "select MaLoaiSanPham, TenLoaiSanPham, BiXoa from LoaiSanPham where MaLoaiSanPham = $maLoaiSanPham";
            $result = $this->ExecuteQuery($sql);
            if($result == null)
                return null;
            $row = mysqli_fetch_array($result)
            extract($row);
            $loaiSanPham = new LoaiSanPhamDTO();
            $loaiSanPham->MaLoaiSanPham = $MaLoaiSanPham;
            $loaiSanPham->TenLoaiSanPham = $TenLoaiSanPham;
            $loaiSanPham->BiXoa = $BiXoa;
            return $LoaiSanPham;
        }
        public function Insert($loaiSanPham)
        {
            $sql = "insert into LoaiSanPham(TenLoaiSanPham, BiXoa) values('$loaiSanPham->TenLoaiSanPham', $loaiSanPham->BiXoa)";
            $this->ExecuteQuery($sql);
        }
        public function Delete($loaiSanPham)
        {
            $sql = "delete from LoaiSanPham where MaLoaiSanPham = $loaiSanPham->MaLoaiSanPham";
            $this->ExecuteQuery($sql);
        }
        public function SetDelete($loaiSanPham)
        {
            $sql = "update LoaiSanPham set BiXoa = 1 where $loaiSanPham->MaLoaiSanPham"
            $this->ExecuteQuery($sql);
        }
        public function UnsetDelete($loaiSanPham)
        {
            $sql = "update LoaiSanPham set BiXoa = 0 where $loaiSanPham->MaLoaiSanPham"
            $this->ExecuteQuery($sql);
        }
        public function Update($loaiSanPham)
        {
            $sql = "update LoaiSanPham set TenLoaiSanPham = $loaiSanPham->TenLoaiSanPham, BiXoa = $loaiSanPham->BiXoa where $loaiSanPham->MaLoaiSanPham"
            $this->ExecuteQuery($sql);
        }
        public function DemSoLuongSanPhamThuocLoai($maLoaiSanPham)
        {
            $sql = "select count(MaSanPham) from SanPham where MaLoaiSanPham = $maLoaiSanPham";
            $result = $this->ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
    }
?>