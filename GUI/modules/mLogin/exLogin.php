<?php
    if(isset($_POST['us']))
    {
        $us = $_POST['us'];
        $pw = $_POST['pw'];
        $taiKhoanBUS = new TaiKhoanBUS();
        $taiKhoan = $taiKhoanBUS->GetByUS_PW($us, $pw);
        if($taiKhoan == null)
        {
            echo '<script language="javascript">';
            echo 'alert("Username or Password is incorrect")';
            echo '</script>';
        }
        else
        {
            $_SESSION['uid'] = $taiKhoan->MaTaiKhoan;
            $_SESSION['dname'] = $taiKhoan->TenHienThi;
            $_SESSION['tuid'] = $taiKhoan->MaLoaiTaiKhoan;
            header("location: index.php");
        }
    }
    else{
        header("location: index.php?a=404");
    }
?>