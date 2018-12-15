<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'] == 1)
    {
        if(isset($_GET['a']))
        {
//page chi tiet cho taikhoan
            if(isset($_GET['mataikhoan']))
            {
                $taiKhoanBUS = new TaiKhoanBUS();
                $admin = new AdminBUS();
                if($taiKhoanBUS->GetByID($_GET['mataikhoan']) == null)
                {
                    echo "<h1 id='error'>Account not found!!!</h1>";
                }
                else
                {
                    $admin->FormDetailAccount($_GET['mataikhoan']);
                    echo '<div id="comback">';
                    echo '</div>';
                    if(isset($_SESSION['checktrue']))
                    {
                        echo "<script> alert('Update Account Successfull!');</script>";
                        unset($_SESSION['checktrue']);
                    }
                }
?>
             <div id="comback"><input type="submit" value="<< Go Back" id="btncomback" onclick="ComeBack()"></div>
<?php
            }
            else if(isset($_GET['madondathang']))
            {
                $donDatHangBUS = new DonDatHangBUS();
                $admin = new AdminBUS();
                if($donDatHangBUS->GetByID($_GET['madondathang']) == null)
                {
                    echo "<h1 id='error'>Order not found!!!</h1>";
                }
                else
                {
                    $admin->FormDetailOrder($_GET['madondathang']);
                    echo '<div id="comback">';
                    echo '</div>';
                }
?>
            <div id="comback"><input type="submit" value="<< Go Back" id="btncomback" onclick="ComeBack()"></div>
<?php
            }
            else
            {
                echo '<script> window.location = "index.php?a=404"; </script>';
            }
        }
        else
        {
            echo '<script> window.location = "index.php?a=404"; </script>';
        }
    }
    else
    {
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
?>