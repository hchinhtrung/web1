<ul>
    <li><a href="index.php">Home</a></li>
    <?php
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
    ?>  
</ul>