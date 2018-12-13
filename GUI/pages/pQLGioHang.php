<div id="product">QUẢN LÝ GIỎ HÀNG</div>
<table id="idTable" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $total = 0;
        if(isset($_SESSION['GioHang']))
        {
            $sanPhamBUS = new SanPhamBUS();
            ksort($_SESSION['GioHang']);
            foreach($_SESSION['GioHang'] as $key=>$value)
            { 
                $masp = $_SESSION['GioHang'][$key]['MaSanPham'];
                $soluong =  $_SESSION['GioHang'][$key]['SoLuong'];
                $sanPham = $sanPhamBUS->GetByID($masp);
                $tien = $soluong*$sanPham->GiaSanPham;
                $total += $tien;
            echo "<tr>";
            echo "<td>$masp</td>";
            echo "<td><img src='GUI/images/$sanPham->HinhURL' width='100' height='100'></td>";
            echo "<td>$sanPham->TenSanPham</td>";
            echo "<td>"
    ?>
                <input type="button" id="idTru" value="-" onclick="location='index.php?a=16&masp=<?php echo $masp ?>';">
    <?php
                echo "<input type='text' id='idSL' value='$soluong' readonly='true'>"
    ?>
                <input type='button' id='idCong' value='+' onclick="location='index.php?a=17&masp=<?php echo $masp ?>';">
            </td>
    <?php
            echo "<td>$tien</td>";
    ?>
            <td><input type='button' id='idXoa' value='Del' onclick="location='index.php?a=18&masp=<?php echo $masp ?>';"></td>
        </tr>
    <?php
            }
        }
    ?>
    </tbody>
</table>
<div id="DatHang">
    <?php  echo "<p>Total:&nbsp;$total</p>" ?>
    <input type="button" id="btnDatHang" value = "Order All" onclick="location='index.php?a=19'">
</div>