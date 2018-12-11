<h3>Product Details</h3>
<div id="boxDetail">
    <div id="chitiet">
        <img src="GUI/images/iphone6.png">
        <div id="thongtinchitiet">
        <?php
            if(isset($_GET["masp"]))
            {
                $masp = $_GET["masp"];
                $sanPhamBUS = new SanPhamBUS();
                $sanPham = $sanPhamBUS->GetByID($masp);
                if($sanPham == null)
                {
                    header("location:index.php?a=404");
                }
                else
                {
                    $loaiSanPhamBUS = new LoaiSanPhamBUS();
                    $hangSanXuatBUS = new HangSanXuatBUS();
                    $loaiSanPham = $loaiSanPhamBUS->GetByID($sanPham->MaLoaiSanPham);
                    $hangSanXuat = $hangSanXuatBUS->GetByID($sanPham->MaHangSanXuat);
                    echo"<h3>$sanPham->TenSanPham</h3>";
                    echo"<h4>Manufacturer: $hangSanXuat->TenHangSanXuat</h4>";
                    echo"<h4>Product Type: $loaiSanPham->TenLoaiSanPham</h4>";
                    echo"<h4>Amount: $sanPham->SoLuongTon</h4>";
                    echo"<h4>Views: $sanPham->SoLuotXem</h4>";
                    echo "<span><h3>Price: $sanPham->GiaSanPham VND</h3></span>";
                }
            }
        ?>
        <?php
            if(isset($_SESSION["uid"]))
            {
                echo "<input type='button' value='ADD TO CART' id='addCart'>";
            }
        ?>
    </div>
    </div>
</div>
<h3>Related Products</h3>