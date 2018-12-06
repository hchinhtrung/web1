<?php
    class TinhTrang extends DB
    {
        public function GetAll()
        {
            $sql= "select MaTinhTrang, TenTinhTrang from tinhtrang";
            $result= $this->ExecuteQuery($sql);
            $lstTinhTrang=array();
            while($row=mysqli_fetch_array($result))
            {
                extracts($row);
                $tinhTrang= new TinhTrangDTO();
                $tinhTrang->MaTinhTrang=$MaTinhTrang;
                $tinhTrang->TenTinhTrang=$TenTinhTrang;
                $lstTinhTrang[]=$tinhTrang;
            }
            return $lstTinhTrang;
        }
        public function GetAllAvailable()
        {
            $sql= "select MaTinhTrang, TenTinhTrang from tinhtrang";
            $result=$this->ExecuteQuery($sql);
            $lstTinhTrang=array();
            while($row=mysqli_fetch_array($result))
            {
                extracts($row);
                $tinhTrang= new TinhTrangDTO();
                $tinhTrang->MaTinhTrang=$MaTinhTrang;
                $tinhTrang->TenTinhTrang=$TenTinhTrang;
                $lstTinhTrang[]=$tinhTrang;

            }
            return $lstTinhTrang;
        }
        public function GetByID($MaTinhTrang)
        {
            $sql= "select MaTinhTrang, TenTinhTrang where MaTinhTrang=$MaTinhTrang";
            $result=$this->ExecuteQuery($sql);
            if($result==null)
                return null;
            $row= mysqli_fetch_array($result)
            extract($row);
            $tinhTrang= new TinhTrangDTO();
            $tinhTrang->MaTinhTrang=$MaTinhTrang;
            $tinhTrang->TenTinhTrang=$TenTinhTrang;
            return $tinhTrang;

        }

        public function Insert($tinhTrang)
        {
            $sql= "insert into tinhtrang(TenTinhTrang) values('$tinhTrang->TenTinhTrang)";
            $this->ExecuteQuery($sql);
        }

        public function Delete($tinhTrang)
        {
            $sql= "delete from tinhtrang where MaTinhTrang=$tinhTrang->MaTinhTrang";
            $this->ExecuteQuery($sql);
        }

        public function Update($tinhTrang)
        {
            $sql = "update tinhtrang set TenTinhTrang = $tinhTrang->TenTinhTrang where $tinhTrang->MaTinhTrang"
            $this->ExecuteQuery($sql);
        }
        
    }
?>