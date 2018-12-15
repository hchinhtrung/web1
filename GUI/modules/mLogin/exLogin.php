<?php
    if(isset($_POST['us']))
    {
        $us = $_POST['us'];
        $pw = $_POST['pw'];
        $taiKhoanBUS = new TaiKhoanBUS();
        $taiKhoan = $taiKhoanBUS->GetByUS_PW($us, md5($pw));
        if($taiKhoan == null)
        {
            echo "<script>
            alert('Username or Password is incorrect')
            window.location.href = 'index.php'
            </script>";

        }
        else
        {
            $_SESSION['uid'] = $taiKhoan->MaTaiKhoan;
            $_SESSION['dname'] = $taiKhoan->TenHienThi;
            $_SESSION['tuid'] = $taiKhoan->MaLoaiTaiKhoan;
            echo '<script> window.location = "index.php"; </script>';
        }
    }
    else{
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
?>