<div id="menu_2">
    <a id="s_menu"><img src="images/menu.png"></a>
    <a id="s_logo" href="index.php"><img src="images/logo.png"></a>
    <a id="s_search" href="#"><img src="images/search.png"></a>
    <a id="s_signin" href="#"><img src="images/avata.png"></a>
</div>
<div id="menu_1">
    <div id="logo">
        <img src="images/logo" width="77" height="40">
    </div>
    <div id="menu">
       <?php
            include ("modules/mMenu.php");
       ?>
    </div>
    <div id="signin">
        <a id="a_signin">Sign in</a>
        <ul id="frmlogin">
            <li>
                <form action="#">
                    Username<br />
                    <input type="text"><br />
                    Password<br />
                    <input type="text"><br />
                    <div><input type="submit" value="Login" id="submit"></div>
                    <a href="#">Sign up</a>
                </form>
            </li>
        </ul>
    </div>
    <div id="search">
        <div id="btn">
            <img src="images/search.png" width="30" height="30"> 
        </div>
        <div id="txt"><input type="text" id="txtSearch"></div>
    </div>
</div>