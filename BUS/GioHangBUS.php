<?php
    class GioHangBUS
    {
        $_SESSION["GioHang"] = array();
        public function Insert($GioHang)
        {
            $_SESSION["GioHang"][] = $GioHang;
        }
    }
?>