<?php
    if(isset($_POST['submit']))
    {
        if(isset($_POST['search']))
        {
            echo '<script> window.location = "index.php?a=29&search='.$_POST['search'].'"; </script>';
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