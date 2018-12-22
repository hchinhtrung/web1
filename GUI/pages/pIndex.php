<div id="product">&nbsp;BEST-NEW PRODUCTS</div>
<div id="frm">
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
                <p><a href='index.php?a=4&masp=$sanPham->MaSanPham'>Detail</a></p>
            </div>";
        }
    ?>
</div>
<div id="product">&nbsp;BEST-SELLING PRODUCTS</div>
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
                <p><a href='index.php?a=4&masp=$sanPham->MaSanPham'>Detail</a></p>
            </div>";
        }
    ?>
</div>