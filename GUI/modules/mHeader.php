<div id="menu_1">
    <div id="logo">
        <img src="GUI/images/logo.png" width="77" height="40">
    </div>
    <div id="menu">
        <div id="a_menu"><img src="GUI/images/menu.png"></div>
        <?php
            include ("GUI/modules/mMenu.php");
        ?>
    </div>
    <div id="a_logo">
        <img src="GUI/images/logo.png" width="77" height="40">
    </div>
    <div id="signin">
        <div id="a_signin"><img src="GUI/images/avata.png"></div>
        <?php
            include ("GUI/modules/mLogin/mLogin.php");
        ?>
    </div>
    <?php
    if(!isset($_SESSION['uid']) || $_SESSION['tuid'] != 1)
    {
    ?>
    <div id="search">
        <div id="a_search"><img src="GUI/images/search.png"></div>
        <ul id="frmSearch">
            <li>
                <form name="frmsearch" action="index.php?a=129" method="POST">
                <input type="text" id="txt" name="search">
                <input type="submit" value="Search" id="btn" name="submit">
                </form>
            </li>
        </ul>
    </div>
    <?php
    }
    ?>
</div>