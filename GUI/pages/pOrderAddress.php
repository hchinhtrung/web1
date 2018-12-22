<?php
 if(isset($_SESSION["uid"]) && $_SESSION['tuid'] == 2)
 {
    if(isset($_SESSION['GioHang']))
    {
        echo '<div id="product">&nbsp;SHIPPING ADDRESS</div>';
        echo '<div id="form">';
        echo '<form name="update" action="index.php?a=120" method="POST" id="idForm">';
        echo'<h4>Adress:</h4>';
        echo '<div>';
        echo '<input type="text" name="address" id="fullname">';
        echo '</div>';
        echo'<h4>Phone number:</h4>';
        echo '<div>';
        echo '<input type="text" name="phone" id="fullname">';
        echo '</div>';
        echo '<input type="submit" name="update" id="smSignUp" value="Next">';
        echo '</form>';
        echo '</div>';
        echo '<div id="comback"><input type="submit" value="<< Go Back" id="btncomback" onclick="ComeBack()"></div>';
        if(isset($_SESSION['checknull']))
        {
            echo '<script> alert("Please fill in the required information!")</script>';
            unset($_SESSION['checknull']);
        }
    }
    else
    {
        $_SESSION['checkcartnull'] = 1;
        echo "<script>window.location.href = 'index.php?a=12';</script>";
    }
}
else
{
    echo "<script>window.location.href = 'index.php?a=404';</script>";
}
?>