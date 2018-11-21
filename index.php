<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phones Store</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <?php
            include ("modules/mHeader.php");
            ?>
        </div>
        <div id="banner">
        <?php
            include ("modules/mBanner.php");
            ?>
        </div>
        <div id="content">
            <?php
                $a = 1;
                if(isset($_GET["a"]))
                {
                    $a = $_GET["a"];
                }
                switch($a)
                {
                    case 1:
                        include ("pages/pIndex.php");
                        break;
                    case 2:
                        include ("pages/pListofPhones.php");
                        break;
                    case 3:
                        include ("pages/pListofTablet.php");
                        break;
                    default:
                        include ("pages/pError.php");
                        break;
                }
            ?>
        </div>
        <div id="footer">
            <?php
                include ("modules/mFooter.php");
            ?>
        </div>
    </div>
</body>
</html>