<?php
if(isset($_GET['a']))
{
    if(isset($_GET['search']))
    {
        if(isset($_POST['ssubmit']))
        {
            $type = 0;
            $man = 0;
            $price = 0;
            if(isset($_POST['typeproduct']))
            {
                $type = $_POST['typeproduct'];
                $man = $_POST['manufacturer'];
                $price = $_POST['price'];
                echo '<script> window.location = "index.php?a=30&search='.$_GET['search'].'&type='.$type.'&manufacturer='.$man.'&price='.$price.'"; </script>';
            }
            else
            {
                echo '<script> window.location = "index.php?a=404"; </script>';
            }
        }
        else
        {
            echo '<script> window.location = "index.php?a=404"; </script>';
        }
    }
    else
    {
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
}
else
{
    echo '<script> window.location = "index.php?a=404"; </script>';
}
?>