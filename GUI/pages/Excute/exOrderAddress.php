<?php
    if(isset($_SESSION["uid"]) && $_SESSION['tuid'] == 2)
    {
        if(isset($_POST['update']))
        {
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            if($address == "" || $phone == "")
            {
                $_SESSION['checknull'] = 1;
                echo "<script>window.location.href = 'index.php?a=119';</script>";
            }
            else
            {
                $taiKhoanBUS = new TaiKhoanBUS();
                $check = $taiKhoanBUS->UpdateInforOrder($address, $phone, $_SESSION['uid']);
                if($check == true)
                {
                    echo "<script>window.location.href = 'index.php?a=19';</script>";
                }
                else
                {
                    echo "<script>window.location.href = 'index.php?a=404';</script>";
                }
            }
        }
        else
        {
            echo "<script>window.location.href = 'index.php?a=404';</script>";
        }
    }
    else
    {
        echo "<script>window.location.href = 'index.php?a=404';</script>";
    }
?>