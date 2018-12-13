<?php
    class ChiTietDonDatHangDAO extends DB
    {
        public function GetAll()
        {
            $sql = "select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham from chitietdonhang";
            $result = $this->ExecuteQuery($sql);
            $lstChiTietDonDatHang= array();
            while($row = mysqli_fetch_array($result))
            {
                extract($row);
                $chiTietDonDatHang= new ChiTietDonDatHangDTO();
                $chiTietDonDatHang->MaChiTietDonDatHang = $MaChiTietDonDatHang;
                $chiTietDonDatHang->SoLuong=$SoLuong;
                $chiTietDonDatHang->GiaBan=$GiaBan;
                $chiTietDonDatHang->MaDonDatHang=$MaDonDatHang;
                $chiTietDonDatHang->MaSanPham=$MaSanPham;
                $lstChiTietDonDatHang[]=$chiTietDonDatHang;
            }
            return $lstChiTietDonDatHang;
        }

        public function GetAllAvailable()
        {
            $sql = "select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang from chitietdonhang";
            $result = $this->ExecuteQuery($sql);
            $lstChiTietDonDatHang = array();
            while( $row = mysqli_fetch_array($result))
            {
                extract($row);
                $chiTietDonDatHang= new ChiTietDonDatHangDTO();
                $chiTietDonDatHang->MaChiTietDonDatHang = $MaChiTietDonDatHang;
                $chiTietDonDatHang->SoLuong=$SoLuong;
                $chiTietDonDatHang->GiaBan=$GiaBan;
                $chiTietDonDatHang->MaDonDatHang=$MaDonDatHang;
                $lstChiTietDonDatHang[]=$chiTietDonDatHang;
            }
            return $lstChiTietDonDatHang;
        }
        public function GetByID($maChiTietDonDatHang)
        {
            $sql = "select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham from chitietdonhang where MaChiTietDonDatHang = $maChiTietDonDatHang";
            $result = $this->ExecuteQuery($sql);
            if($result == null)
            {
                return null;
            }
            else
            {
                $row = mysqli_fetch_array($result);
                extract($row);
                $chiTietDonDatHang= new ChiTietDonDatHangDTO();
                $chiTietDonDatHang->MaChiTietDonDatHang = $MaChiTietDonDatHang;
                $chiTietDonDatHang->SoLuong=$SoLuong;
                $chiTietDonDatHang->GiaBan=$GiaBan;
                $chiTietDonDatHang->MaDonDatHang=$MaDonDatHang;
                $chiTietDonDatHang->MaSanPham=$MaSanPham;
            }
        }
        public function InSert ($chiTietDonDatHang)
        {
            $sql ="insert into chitietdonhang(MaChiTietDonDatHang) values ('$chiTietDonDatHang->MaChiTietDonDatHang')";
            $this->ExecuteQuery($sql);
        }

        public function Delete ($chiTietDonDatHang)
        {
            $sql = "delete from chitietdonhang where MaChiTietDonHang = $chiTietDonDatHang->MaChiTietDonHang";
            $this -> ExecuteQuery($sql);
        }

        public function Update($chiTietDonDatHang)
        {
            $sql = "select chitietdonhang set MaChiTietDonDatHang= $chiTietDonDatHang->MaChiTietDonDangHang where $chiTietDonDatHang->MaChiTietDonDatHang";
            $this -> ExecuteQuery($sql); 
        }

        public function GetByIDDonHang($MaDonDatHang)
        {
            $sql = "select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang from chitietdonhang where MaDonDatHang=$MaDonDatHang";
            $this->ExecuteQuery($sql);
        }
    }

?>