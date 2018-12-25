<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'] == 1)
    {
        if(isset($_GET['a']))
        {
            if($_GET['a'] == 23)
            {
//thuc thi delete cho taikhoan
                if(isset($_GET['mataikhoan']))
                {
                    $taiKhoanBUS = new TaiKhoanBUS();
                    if($taiKhoanBUS->GetByID($_GET['mataikhoan']) != null)
                    {
                        $check = $taiKhoanBUS->Delete($_GET['mataikhoan']);
                        if($check == true)
                        {
                            echo '<script> window.location = "index.php?a=5"; </script>';
                        }
                        else
                        {
                            $_SESSION['deletefalse'] = 1;
                            echo "<script>window.location.href = 'index.php?a=5';</script>";
                        }   
                    }
                    else
                    {
                        $_SESSION['deleteexists'] = 1;
                        echo "<script>window.location.href = 'index.php?a=8';</script>";
                    }
                }
//thuc thi delete sanpham
                if(isset ($_GET['masanpham']))
                {
                    $sanPhamBUS = new SanPhamBUS();
                    if($sanPhamBUS->GetByID($_GET['masanpham']) != null)
                    {
                        $check = $sanPhamBUS ->Delete($_GET['masanpham']);
                        if($check == true)
                        {
                            echo '<script> window.location ="index.php?a=6";</script>';
                        }
                        else
                        {
                            $_SESSION['deletefalse'] = 1;
                            echo "<script>window.location.href='index.php?a=6';</script>";
                        }
                    }
                    else 
                    {
                        $_SESSION['deleteexists'] = 1;
                        echo "<script> window.location.href='index.php?a=6'</script>";
                    }
                }
//thuc thi delete cho loaisanpham
                else if(isset($_GET['maloaisanpham']))
                {
                    $loaiSanPhamBUS = new LoaiSanPhamBUS();
                    $loaiSanPham = $loaiSanPhamBUS->GetByID($_GET['maloaisanpham']);
                    if($loaiSanPham != null)
                    {
                        $check = $loaiSanPhamBUS->Delete($_GET['maloaisanpham']);
                        if($check == true)
                        {
                            echo '<script> window.location = "index.php?a=7"; </script>';
                        }
                        else
                        {
                            $_SESSION['deletefalse'] = 1;
                            echo "<script> window.location.href = 'index.php?a=7';</script>";
                        }
                    }
                    else
                    {
                        $_SESSION['deleteexists'] = 1;
                        echo "<script>window.location.href = 'index.php?a=7';</script>";
                    }
                }
//thuc thi delete cho hangsanxuat
                else if(isset($_GET['mahangsanxuat']))
                {
                 
                    $hangSanXuatBUS = new HangSanXuatBUS();
                    $hangSanXuat = $hangSanXuatBUS->GetByID($_GET['mahangsanxuat']);
                    if($hangSanXuat != null)
                    {
                        $check = $hangSanXuatBUS->Delete($_GET['mahangsanxuat']);
                        if($check == true)
                        {
                            echo '<script> window.location = "index.php?a=8"; </script>';
                        }
                        else
                        {
                            $_SESSION['deletefalse'] = 1;
                            echo "<script>window.location.href = 'index.php?a=8';</script>";
                        }   
                    }   
                    else
                    {
                        $_SESSION['deleteexists'] = 1;
                        echo "<script>window.location.href = 'index.php?a=8';</script>";
                    }
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
    }
    else
    {
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
?>