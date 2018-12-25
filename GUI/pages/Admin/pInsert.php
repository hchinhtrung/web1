<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'])
    {
        if(isset($_GET['a']))
        {
//page insert cho taikhoan
            if($_GET['id'] == 5)
            {
                $adminBUS = new AdminBUS();
                $adminBUS->FormInsertTaiKhoan($_GET['id']);
                if(isset($_SESSION['checknull']))
                {
                    echo "<script> alert('Please fill in the required information!');</script>";
                    unset($_SESSION['checknull']);
                }
                else if(isset($_SESSION['checkexists']))
                {
                    echo "<script> alert('Username already exists!');</script>";
                    unset($_SESSION['checkexists']);
                }
                else if(isset($_SESSION['checkpass']))
                {
                    echo "<script> alert('Confirm password is incorrect!');</script>";
                    unset($_SESSION['checkpass']);
                }
                else if(isset($_SESSION['checkdate']))
                {
                    echo "<script> alert('Date of birth is incorrect!');</script>";
                    unset($_SESSION['checkpass']);
                }
                else if(isset($_SESSION['checktrue']))
                {
                    echo "<script> alert('Insert Account Successfull!');</script>";
                    unset($_SESSION['checktrue']);
                }
                else if(isset($_SESSION['checkfalse']))
                {
                    echo "<script> alert('Insert False!');</script>";
                    unset($_SESSION['checkfalse']);
                }
            }
//page insert cho sanpham
            else if($_GET['id'] == 6)
            {
                $adminBUS = new AdminBUS();
                $adminBUS->FormInsertSanPham($_GET['id']);
                if(isset($_SESSION['checknull']))
                {
                    echo "<script> alert('Please fill in the required information!');</script>";
                    unset($_SESSION['checknull']);
                }
                else if(isset($_SESSION['checkfalse']))
                {
                    echo "<script> alert('Insert Failed!');</script>";
                }
            }
//page insert cho loaitakhoan
            else if($_GET['id'] == 7)
            {
                $adminBUS = new AdminBUS();
                $adminBUS->FormInsertLoaiSanPham($_GET['id']);
                if(isset($_SESSION['checknull']))
                {
                    echo "<script> alert('Please fill in the required information!');</script>";
                    unset($_SESSION['checknull']);
                }
                else if(isset($_SESSION['checkfalse']))
                {
                    echo "<script> alert('Insert Failed!');</script>";
                }
            }
//page insert cho hangsanxuat
            else if($_GET['id'] == 8)
            {
                $adminBUS = new AdminBUS();
                $adminBUS->FormInsertHangSanXuat($_GET['id']);
                if(isset($_SESSION['checknull']))
                {
                    echo "<script> alert('Please fill in the required information!');</script>";
                    unset($_SESSION['checknull']);
                }
                else if(isset($_SESSION['checkfalse']))
                {
                    echo "<script> alert('Insert Failed!');</script>";
                }
            }
            else
            {
                header("location:index.php?a=404");    
            }
        }
        else
        {
            header("location:index.php?a=404");
        }
?>
<?php
    }
    else
    {
        header("location:index.php?a=404");  
    }
?>