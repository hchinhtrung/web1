<div id="menu_1">
    <div id="logo">
        <img src="GUI/images/logo" width="77" height="40">
    </div>
    <div id="menu">
        <div id="a_menu"><img src="GUI/images/menu.png"></div>
        <?php
            include ("GUI/modules/mMenu.php");
        ?>
    </div>
    <div id="a_logo">
        <img src="GUI/images/logo" width="77" height="40">
    </div>
    <div id="signin">
        <div id="a_signin"><img src="GUI/images/avata.png"></div>
        <ul id="frmlogin">
            <li>
                <form action="index.php">
                    Username<br />
                    <input type="text"><br />
                    Password<br />
                    <input type="password"><br />
                    <div><input type="submit" value="Login" id="submit"></div>
                    <a href="#">Sign up</a>
                </form>
            </li>
        </ul>
    </div>
    <div id="search">
        <div id="a_search"><img src="GUI/images/search.png"></div>
        <ul id="frmSearch">
            <li>
                <input type="text" id="txt">
                <input type="button" value="Search" id="btn">
            </li>
        </ul>
    </div>
</div>