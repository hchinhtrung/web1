<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'])
    {

    }
    else
    {
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
?> 