<ul>
    <li><a href="index.php">Home</a></li>
    <?php
    if(isset($_SESSION["tuid"]) &&  $_SESSION["tuid"] == 1)
    {
        echo "<li><a href='index.php?a=5'>Tài Khoản</a></li>";
        echo "<li><a href='index.php?a=6'>Sản Phẩm</a></li>";
        echo "<li><a href='index.php?a=7'>Loại Sản Phẩm</a></li>";
        echo "<li><a href='index.php?a=8'>Hãng Sản Xuất</a></li>";
        echo "<li><a href='index.php?a=9'>Đơn Hàng</a></li>";
    }
    else
    {
        $loaiSanPhamBUS = new LoaiSanPhamBUS();
        $lstLoaiSanPham = $loaiSanPhamBUS->GetAllAvailable();
        foreach ($lstLoaiSanPham as $loaiSanPham)
        {
            echo "<li><a href='index.php?a=2&malsp=$loaiSanPham->MaLoaiSanPham'>$loaiSanPham->TenLoaiSanPham</a>";
        ?>
        <ul id="sub_menu">  
        <?php
        $hangSanXuatBUS = new HangSanXuatBUS();
        $lstHangSanXuat = $hangSanXuatBUS->GetByMaLoaiSanPham($loaiSanPham->MaLoaiSanPham);
        foreach ($lstHangSanXuat as $hangSanXuat)
        {
        echo "<li><a href='index.php?a=2&malsp=$loaiSanPham->MaLoaiSanPham&mahsx=$hangSanXuat->MaHangSanXuat'>$hangSanXuat->TenHangSanXuat</a></li>";
        }
        ?>
        </li>
    </ul>
    <?php
        }
    }
    ?>
</ul>