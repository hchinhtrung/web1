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
            
        }
    }
?>