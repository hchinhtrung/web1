<ul>
    <li><a href="index.php">Home</a></li>
    <?php
        $sql = "select lsp.MaLoaiSanPham, lsp.TenLoaiSanPham from loaisanpham lsp where lsp.BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            extract($row);
            echo "<li><a href='index.php?a=2&id=$MaLoaiSanPham'>$TenLoaiSanPham</a>";
    ?>
    <ul id="sub_menu">
        <?php
            $sql = "select hsp.MaLoaiSanPham, h.MaHangSanXuat, h.TenHangSanXuat from hangsanxuat h, hangsxcualoaisp hsp where h.MaHangSanXuat = hsp.MaHangSanXuat and hsp.MaLoaiSanPham = $MaLoaiSanPham and h.BiXoa = 0";
            $result_1 = DataProvider::ExecuteQuery($sql);
            while($row_1 = mysqli_fetch_array($result_1))
            {
                extract($row_1);
                echo "<li><a href='index.php?a=2&id=$MaLoaiSanPham&h=$MaHangSanXuat'>$TenHangSanXuat</a></li>";
            }
        ?>
        </li>
    </ul>
    <?php
        }
    ?>  
</ul>