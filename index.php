<?php
    session_start();
    include_once ("GUI/lib/DataProvider.php");
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
        include("DTO/TaiKhoanDTO.PHP");
        include("DAO/TaiKhoanDAO.php");
        include("BUS/TaiKhoanBUS.php");

        include("DTO/LoaiSanPhamDTO.PHP");
        include("DAO/LoaiSanPhamDAO.php");
        include("BUS/LoaiSanPhamBUS.php");

        include("DTO/HangSanXuatDTO.PHP");
        include("DAO/HangSanXuatDAO.php");
        include("BUS/HangSanXuatBUS.php");

        include("DTO/HSXCuaLSPDTO.PHP");
        include("DAO/HSXCuaLSPDAO.php");
        include("BUS/HSXCuaLSPBUS.php");

        include("DTO/SanPhamDTO.PHP");
        include("DAO/SanPhamDAO.php");
        include("BUS/SanPhamBUS.php");


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
                        include ("GUI/pages/pIndex.php");
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
                    case 10:
                        include ("GUI/modules/mLogin/exLogin.php");
                        break;
                    case 11:
                        include ("GUI/modules/mLogin/exLogout.php");
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