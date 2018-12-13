<?php
    class DonDatHangDAO extends DB
    {
        public function GetAll()
        {
            $sql = "select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from dondathang";
            $result = $this->ExecuteQuery($sql);
            $lstDonDatHang = array();
            while( $row = mysqli_fetch_array($result))
            {
                extract($row);
                $donDatHang = new DonDatHangDTO();
                $donDatHang->MaDonDatHang = $MaDonDatHang;
                $donDatHang->NgayLap = $NgayLap;
                $donDatHang->TongThanhTien = $TongThanhTien;
                $donDatHang->MaTaiKhoan = $MaTaiKhoan;
                $donDatHang->MaTinhTrang = $MaTinhTrang;
                $lstDonDatHang[] = $donDatHang;
            }
            return $lstDonDatHang;
        }
        public function GetByID($maDonDatHang)
        {
            $sql = "select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from dondathang where MaDonDatHang = $maDonDatHang";
            $result = $this->ExecuteQuery($sql);
            if($result == null)
            {
                return null;
            }
            else
            {
                $row = mysqli_fetch_array($result);
                if($row == null)
                {
                    return null;
                }
                extract($row);
                $donDatHang = new DonDatHangDTO();
                $donDatHang->MaDonDatHang = $MaDonDatHang;
                $donDatHang->NgayLap = $NgayLap;
                $donDatHang->TongThanhTien = $TongThanhTien;
                $donDatHang->MaTaiKhoan = $MaTaiKhoan;
                $donDatHang->MaTinhTrang = $MaTinhTrang;
                return $donDatHang;
            }
        }
        public function GetMaxID()
        {
            $sql = "select MAX(MaDonDatHang) as Max from dondathang";
            $result =  $this->ExecuteQuery($sql);
            return mysqli_fetch_array($result)['Max'];
            
        }
        public function Insert($donDatHang)
        {
            $sql = "insert into dondathang (MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) values ('$donDatHang->MaDonDatHang', '$donDatHang->NgayLap', $donDatHang->TongThanhTien, $donDatHang->MaTaiKhoan, $donDatHang->MaTinhTrang)";
            return $this->ExecuteQuery($sql);
        }
        public function Update($donDatHang)
        {
            $sql = "update dondathang set MaTinhTrang = $donDatHang->MaTinhTrang where $donDatHang->MaDonDatHang";
            return $this->ExecuteQuery($sql);
        }
        public function Delete($maDonDatHang)
        {
            $sql = "delete from donDatHang where MaDonDAtHang = $maDonDatHang";
            $this->ExecuteQuery($sql);
        }
    }
?>