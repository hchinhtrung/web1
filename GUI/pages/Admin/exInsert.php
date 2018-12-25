<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'] == 1)
    {
        if(isset($_GET['a']))
        {
            if(isset($_POST['insert']))
            {
                if(isset($_GET['id']))
                {
//thuc hien insert cho tai khoan
                    if($_GET['id'] == 5)
                    {
                       
                        $fullname = $_POST["fullname"];
                        $day = $_POST["day"];
                        $month = $_POST["month"];
                        $year = $_POST["year"];
                        $city = $_POST["city"];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $type = $_POST['type'];
                        $usname = $_POST["usname"];
                        $pass = $_POST["password"];
                        $cfpass=$_POST["cfpassword"];
                        $taiKhoanBUS = new TaiKhoanBUS();
                        $a = $taiKhoanBUS->CheckExistsUser($usname);
                        if($usname == "" || $pass == "" || $cfpass =="")
                        {
                            $_SESSION['checknull'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=5';</script>";
                        }
                        else if($a == 1)
                        {
                            $_SESSION['checkexists'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=5';</script>";
                        }
                        else if($cfpass!=$pass)
                        {
                            $_SESSION['checkpass'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=5';</script>";
                        }
                        else if($day != 0 || $month != 0 || $year != 0)
                        {
                            if(checkdate($month, $day, $year) == false)
                            {
                                $_SESSION['checkdate'] = 1;
                                echo '<script language="javascript">';
                                echo 'alert("Date of birth is incorrect!")';
                                echo '</script>';
                            }
                        }
                        else
                        {
                            $taiKhoan = new TaiKhoanDTO();
                            $taiKhoan->TenDangNhap = $usname;
                            $taiKhoan->MatKhau = md5($pass);
                            if($day!=0 ||$month != 0 || $year != 0)
                            {
                                $taiKhoan->NgaySinh = $year."-".$month."-".$day;
                            }
                            else
                            {
                                $taiKhoan->NgaySinh = NULL;
                            }
                            $taiKhoan->TenHienThi = $fullname;
                            $taiKhoan->DiaChi = $city;
                            $taiKhoan->DienThoai = $phone;
                            $taiKhoan->Email = $email;
                            $taiKhoan->LoaiTaiKhoan = $type;
                            $check = $taiKhoanBUS->Insert($taiKhoan);
                            if($check == true)
                            {
                                $_SESSION['checktrue'] = 1;
                                echo "<script> window.location = 'index.php?a=21&id=5';</script>";
                            }
                            else
                            {
                                $_SESSION['checkfalse'] = 1;
                                echo "<script> window.location = 'index.php?a=21&id=5';</script>";
                            }
                        }
                    }
//thuc hien insert cho san pham
                    else if($_GET['id'] == 6)
                    {
                        if(isset($S_POST["insert"]))
                        {
                            if($_FILES["image_file"]["name"] != '')
                            {
                                $allowed_ext = array("jpg", "png" );
                                $ext = end (explode(".", $_FILES["image_file"]["name"]));
                                if(in_array($ext, $allowed_ext))
                                {
                                    if($_FILES["image_file"]["size"]<50000)
                                    {
                                        $name= md5(rand()) . '.' . $ext;
                                        $path = "images/" .$name;
                                        move_uploaded_file ($_FILE["image_file"]["tmp_name"], $path);
                                        header("location:index.php?filename=".$name."");
                                    }
                                }
                                else{
                                    echo '<script>alert("big image file")</script>';
                                }
                            }
                            else
                            {
                                echo '<script> alert("please select file")</script>';
                            }
                        
                        $sanPhamBUS = new SanPhamBUS();
                        $name = $_POST['adname'];
                        $manu = $_POST['manufacture'];
                        $typep = $_POST['typeofproduct'];
                        $price = $_POST['price'];
                        $quaex = $_POST['quaex'];
                        $date = date('Y-m-d');
                        $image = $_POST['image_file'];

                        if($name == "" || $manu = "" ||  $typep="" || $price="" ||$quaex ="")
                        {
                            $_SESSION['checknull'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=6';</script>";   
                        }
                        else
                        {
                            $sanPham = new SanPhamDTO();
                            $sanPham->TenSanPham = $name;
                            $sanPham->TenHangSanXuat=$manu;
                            $sanPham->GiaSanPham = $price;
                            $sanPham->SoLuongTon = $quaex;
                            $sanPham->HinhURL = $image;
                            $sanPham->NgayNhap = $date;
                            $check = $sanPhamBUS->Insert($sanPham);
                            if($check)
                            {
                                echo '<script> window.location = "index.php?a=6"; </script>';
                            }
                            else
                            {
                                $_SESSION['checkfalse'] = 1;
                                echo "<script> window.location = 'index.php?a=21&id=6';</script>";
                            }
                        }
                    }
}
//thuc hien insert cho loai san pham
                    else if($_GET['id'] == 7)
                    {
                        $loaiSanPhamBUS = new LoaiSanPhamBUS();
                        $name = $_POST['adname'];
                        if($name == "")
                        {
                            $_SESSION['checknull'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=7';</script>";   
                        }
                        else
                        {
                            $loaiSanPham = new LoaiSanPhamDTO();
                            $loaiSanPham->TenLoaiSanPham = $name;
                            $check = $loaiSanPhamBUS->Insert($loaiSanPham);
                            if($check)
                            {
                                echo '<script> window.location = "index.php?a=7"; </script>';
                            }
                            else
                            {
                                $_SESSION['checkfalse'] = 1;
                                echo "<script> window.location = 'index.php?a=21&id=7';</script>";
                            }
                        }
                    }
//thuc hien insert cho hang san xuat
                    else if($_GET['id'] == 8)
                    {
                        $hangSanXuatBUS = new HangSanXuatBUS();
                        $name = $_POST['adname'];
                        if($name =="")
                        {
                            $_SESSION['checknull'] = 1;
                            echo "<script> window.location = 'index.php?a=21&id=8';</script>";
                        }
                        else
                        {
                            $id = $hangSanXuatBUS->GetMaxID();
                            if($id == null)
                            {
                                $id = 1;
                            }
                            else
                            {
                                $id += 1;
                            }
                            $hangSanXuat = new HangSanXuatDTO();
                            $hangSanXuat->MaHangSanXuat = $id;
                            $hangSanXuat->TenHangSanXuat = $name;
                            $check = $hangSanXuatBUS->Insert($hangSanXuat);
                            if($check)
                            {
                                $loaiSanPhamBUS = new LoaiSanPhamBUS();
                                $lst = array();
                                $lst = $loaiSanPhamBUS->GetAll();
                                foreach($lst as $loaiSanPham)
                                {
                                    if(isset($_POST[$loaiSanPham->MaLoaiSanPham]))
                                    {
                                        $hsxcualsp = new HSXCuaLSpBUS();
                                        $hsxcualsp->Insert($loaiSanPham->MaLoaiSanPham, $id);
                                    }
                                }
                                echo '<script> window.location = "index.php?a=8"; </script>';
                            }
                            else
                            {
                                $_SESSION['checkfalse'] = 1;
                                echo "<script> window.location = 'index.php?a=21&id=8';</script>";
                            }
                        }
                    }
                    else
                    {
                        echo '<script> window.location = "index.php?a=404"; </script>';
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