<h3>SIGN UP FOR AN ACCOUNT</h3>
<div id="form">
    <form name="frmSignUp" action="" method="POST" id="idForm">
        <h4>Profile information</h4>
        <div>
            Full name:<br />
            <input type="text" name="fullname" id="fullname">
        </div>
        <div>
            <?php
                $now = getdate();
                $year = $now["year"] - 13;
            ?>
            Date of birth:<br />
            <select id="day" name="day">
                <option value="0">--Day--</option>
                <?php
                    for ($i=1; $i <= 31 ; $i++) { 
                        if($i<10)
                        {
                            $string = "0".(string)$i;
                            echo "<option value='$string'>$string</option>";
                        }
                        else
                        {
                            echo "<option value='$i'>$i</option>";
                        }
                    }
                ?>
            </select>
            <select id="month" name="month">
                <option value="0">--Month--</option>
                <?php
                    for ($i=1; $i <= 12 ; $i++) { 
                        if($i<10)
                        {
                            $string = "0".(string)$i;
                            echo "<option value='$string'>$string</option>";
                        }
                        else
                        {
                            echo "<option value='$i'>$i</option>";
                        }
                    }
                ?>
            </select>
            <select id="year" name="year">
                <option value="0">--Year--</option>
                <?php
                    for ($i=$year; $i > $year-60 ; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select><br/>
        </div>
        <div id="city" name="city">
            City/region:<br/>
            <select name="city">
                <option value="">--Choose city/region--</option>
                <?php
                    $tinhThanhBUS = new TinhThanhBUS();
                    $lstTinhThanh = $tinhThanhBUS->GetAll();
                    foreach ($lstTinhThanh as $tinhThanh) 
                    {
                        echo "<option value='$tinhThanh->TenTinhThanh'>$tinhThanh->TenTinhThanh</option><br/>";
                    }
                ?>
            </select>
        </div>
        <h4>Login information</h4>
        <div>
            User name:<span style="color:red;">*</span><br />
            <input type="text" name="usname" id="usname"><br/>
        </div>
        <div>
            Password:<span style="color:red;">*</span><br/>
            <input type="password" name="password" id="password"><br/>
        </div>
        <div>
            Confirm password:<span style="color:red;">*</span><br/>
            <input type="password" name="cfpassword" id="cfpassword"><br/>
        </div>
        <h4>Security information</h4>
        <div id="idCaptcha">
            Confirm captcha:<span style="color:red;">*</span><br />
            <table>
                <thead>
                    <tr>
                        <th>
                        <img src="GUI/modules/captcha.php" width="140" height="60" id="captchaimg"><br />
                        </th>
                        <th>
                        <input type="text" name="captcha" id="captcha">
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="submit" name="submit" id="smSignUp" value="Sign up">
        <span style="color:red"><p id="cautionPass"></p></span>
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        $fullname = $_POST["fullname"];
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $city = $_POST["city"];
        $usname = $_POST["usname"];
        $pass = $_POST["password"];
        $cfpass=$_POST["cfpassword"];
        $captcha = $_POST["captcha"];
        $taiKhoanBUS = new TaiKhoanBUS();
        $a = $taiKhoanBUS->CheckExistsUser($usname);
        $taiKhoanBUS = new TaiKhoanBUS();
        $a = $taiKhoanBUS->CheckExistsUser($usname);
        if($usname == "" || $pass == "" || $cfpass =="" || $captcha == "")
        {
            echo '<script language="javascript">';
            echo 'alert("Please fill in the required information!")';
            echo '</script>';
        }
        else if($a == 1)
        {
            echo '<script language="javascript">';
            echo 'alert("Username already exists!")';
            echo '</script>';
        }
        else if($cfpass!=$pass)
        {
            echo '<script language="javascript">';
            echo 'alert("Confirm password is incorrect!")';
            echo '</script>';
        }
        else if($captcha != $_SESSION["captcha"])
        {
            echo '<script language="javascript">';
            echo 'alert("Captcha is incorrect!")';
            echo '</script>';
        }
        else if(checkdate($month, $day, $year) == false)
            {
                echo '<script language="javascript">';
                echo 'alert("Date of birth is incorrect!")';
                echo '</script>';
            }
        else
        {
            $taiKhoan = new TaiKhoanDTO();
            $taiKhoan->TenDangNhap = $usname;
            $taiKhoan->MatKhau = md5($pass);
            if($day!=0)
            {
                $taiKhoan->NgaySinh = $year."-".$month."-".$day;
            }
            else
            {
                $taiKhoan->NgaySinh = null;
            }
            $taiKhoanBUS->TenHienThi = $fullname;
            $taiKhoan->DiaChi = $city;
            $check = $taiKhoanBUS->Insert($taiKhoan);
            if($check ==false)
            {
                echo '<script language="javascript">';
                echo 'alert("Sign Up Falsed")';
                echo '</script>';
            }
            else
            {
                echo '<script language="javascript">';
                echo 'alert("Sign Up Success")';
                echo '</script>';
            }
        }
    }
    ?>
</div>