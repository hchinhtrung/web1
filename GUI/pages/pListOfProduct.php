<?php
    if(isset($_GET["malsp"]))
    {
        $sanPhamBUS = new SanPhamBUS();
        if(isset($_GET["mahsx"]))
        {
            $lstSanPham = $sanPhamBUS->GetByHSX_LSP($_GET["mahsx"], $_GET["malsp"]);
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
        }
        else
        {
            $lstSanPham = $sanPhamBUS->GetByLSP($_GET["malsp"]);
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
        }
    }
?>