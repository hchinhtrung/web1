<?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="GUI/css/style.css">
    <script src="GUI/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="GUI/js/myjs.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phones Store</title>
</head>
<body>
    <?php
        include("DAO/DB.php");
        include("DTO/TaiKhoanDTO.php");
        include("DAO/TaiKhoanDAO.php");
        include("BUS/TaiKhoanBUS.php");

        include("DTO/LoaiSanPhamDTO.php");
        include("DAO/LoaiSanPhamDAO.php");
        include("BUS/LoaiSanPhamBUS.php");

        include("DTO/HangSanXuatDTO.php");
        include("DAO/HangSanXuatDAO.php");
        include("BUS/HangSanXuatBUS.php");

        include("DTO/HSXCuaLSPDTO.php");
        include("DAO/HSXCuaLSPDAO.php");
        include("BUS/HSXCuaLSPBUS.php");

        include("DTO/SanPhamDTO.php");
        include("DAO/SanPhamDAO.php");
        include("BUS/SanPhamBUS.php");

        include("DTO/TinhThanhDTO.php");
        include("DAO/TinhThanhDAO.php");
        include("BUS/TinhThanhBUS.php");

        include("DTO/DonDatHangDTO.php");
        include("DAO/DonDatHangDAO.php");
        include("BUS/DonDatHangBUS.php");

        include("DTO/ChiTietDonDatHangDTO.php");
        include("DAO/ChiTietDonDatHangDAO.php");
        include("BUS/ChiTietDonDatHangBUS.php");

        include("BUS/GioHangBUS.php");
    ?>
    <div id="container">
        <div id="header">
            <?php
            include ("GUI/modules/mHeader.php");
            ?>
        </div>
        <div id="banner">
        <?php
            include ("GUI/modules/mBanner.php");
            ?>
        </div>
        <div id="content">
            <?php
                $a = 1;
                if(isset($_GET["a"]))
                {
                    $a = $_GET["a"];
                }
                switch($a)
                {
                    case 1:
                        if(isset($_SESSION["tuid"]))
                        {
                            if($_SESSION["tuid"] == 1)
                            {
                                include ("GUI/pages/Admin/pThongKe.php");
                            }
                            else
                            {
                                include ("GUI/pages/pIndex.php");
                            }
                        }
                        else
                        {
                            include ("GUI/pages/pIndex.php");
                        }
                        break;
                    case 2:
                        include ("GUI/pages/pListOfProduct.php");
                        break;
                    case 3:
                        include ("GUI/pages/pListofTablet.php");
                        break;
                    case 4:
                        include ("GUI/pages/pChiTietSanPham.php");
                        break;
                    case 5:
                        include ("GUI/pages/Admin/pQLTaiKhoan.php");
                        break;
                    case 6:
                        include ("GUI/pages/Admin/pQLSanPham.php");
                        break;
                    case 7:
                        include ("GUI/pages/Admin/pQLHangSanXuat.php");
                        break;
                    case 8:
                        include ("GUI/pages/Admin/pQLLoaiSanPham.php");
                        break;
                    case 9:
                        include ("GUI/pages/Admin/pQLDonDatHang.php");
                        break;
                    case 10:
                        include ("GUI/modules/mLogin/exLogin.php");
                        break;
                    case 11:
                        include ("GUI/modules/mLogin/exLogout.php");
                        break;
                    case 12:
                        include ("GUI/pages/pQLGioHang.php");
                        break;
                    case 13:
                        include ("GUI/pages/pSignUp.php");
                        break;
                    case 14:
                        include("GUI/pages/exSignUp.php");
                        break;
                    case 15:
                        include ("GUI/pages/Excute/exInsertCart.php");
                        break;
                    case 16:
                        include ("GUI/pages/Excute/exMinus.php");
                        break;
                    case 17:
                        include ("GUI/pages/Excute/exPlus.php");
                        break;
                    case 18:
                        include ("GUI/pages/Excute/exDelete.php");
                        break;
                    case 19:
                        include ("GUI/pages/Excute/exOrderAll.php");
                        break;
                    default:
                        include ("GUI/pages/pError.php");
                        break;
                }
            ?>
        </div>
        <div id="footer">
            <?php
                include ("GUI/modules/mFooter.php");
            ?>
        </div>
    </div>
</body>
</html>