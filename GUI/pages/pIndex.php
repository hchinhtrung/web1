<div id="product">SẢN PHẨM MỚI NHẤT</div>
<div>
    <?php
        $sanPhamBUS = new SanPhamBUS();
        $lstSanPham = $sanPhamBUS->GetTopToDate();
        foreach ($lstSanPham as $sanPham)
        {
            echo "
            <div id='box'>
                <img src='GUI/images/$sanPham->HinhURL'>
                <p>$sanPham->TenSanPham</p>
                <div>
                    $sanPham->GiaSanPham vnd
                </div>
                <p><a href='index.php?a=4&masp=$sanPham->MaSanPham'>Chi tiết</a></p>
            </div>";
        }
    ?>
</div>
<div id="product">SẢN PHẨM HOT NHẤT</div>
<div>
    <?php
        $sanPhamBUS = new SanPhamBUS();
        $lstSanPham = $sanPhamBUS->GetTopToSoLuongBan();
        foreach ($lstSanPham as $sanPham)
        {
            echo "
            <div id='box'>
                <img src='GUI/images/$sanPham->HinhURL'>
                <p>$sanPham->TenSanPham</p>
                <div>
                    $sanPham->GiaSanPham vnd
                </div>
                <p><a href='index.php?a=4&masp=$sanPham->MaSanPham'>Chi tiết</a></p>
            </div>";
        }
    ?>
</div>