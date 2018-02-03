<html>
<head>
    <link href="fbCss.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="header_wrapper">
    <div id="header">
        <li id="sitename"><a href="http://talkerscode.com">talkerscode</a></li>
        <form action="loginInfo.php" method="post">
            <li>Email or Phone<br><input type="text" name="email" required></li>
            <li>Password<br><input type="password" name="password" required><br><a href="">Forgotten account?</a></li>
            <li><input type="submit" name="login" value="Log In"></li>
        </form>
    </div>
</div>

<div id="wrapper">

    <!-- firstname surname email re_email -->
    <div id="div1">
        <p<Talkerscode helps you connect and share with the <br>people in your life.</p>
        <img src="images/fb_map_image.jpg">
    </div>

    <div id="div2">
        <form action="registerInfo.php" method="post">
            <h1>Create an account</h1>
            <p>It's free and always will be.</p>
            <li><input type="text" placeholder="First Name" name="firstname" id="firstname" required><input type="text" placeholder="Surname" name="surname" id="surname" required></li>
            <li><input type="text" placeholder="Mobile number or email address" name="email" required></li>
            <li><input type="text" placeholder="Re-enter mobile number or email address" name="re_email" required></li>
            <li><input type="password" placeholder="New password" name="password" id="password" required></li>
            <p>Birthday</p>
            <li>
                <select name="day"><option>Day</option>
                    <?php
                        for($i=1;$i<=31;$i++)
                        {
                            echo "<option value=$i>$i</option>";
                        }
                    ?>
                </select>
                <select name="month"><option>Month</option>
                    <?php
                    for($i=1;$i<=12;$i++)
                    {
                        echo "<option value=$i>$i</option>";
                    }
                    ?>
                </select>
                <select name="year"><option>Year</option>
                    <?php
                    for($i=1950;$i<=2020;$i++)
                    {
                        echo "<option value=$i>$i</option>";
                    }
                    ?>
                </select>
                <a href="">Why do I need to provide my date of birth?</a>
            </li>
            <li><input type="radio" name="gender" value="Female">Female <input type="radio" name="gender" value="Male">Male</li>
            <li id="terms">By clicking Create an account, you agree to our <a href="">Terms</a> and that <br>you have read our <a href="">Data Policy</a>, including our <a href="">Cookie Use</a>.</li>
            <li><input type="submit" name="submit" value="Create an account"></li>
            <li id="create_page"><a href="">Create a Page</a> for a celebrity, band or business.</li>
        </form>
    </div>

</div>

<!--
<div id="footer_wrapper">

    <div id="footer1">
        English (UK) <a href="">हिन्दी</a><a href="">ਪੰਜਾਬੀ</a><a href=""> اردو</a><a href="">தமிழ்</a><a href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a href="">മലയാളം</a>
    </div>
    <div id="footer2">
        <a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">Talkerscode</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
        <p>Design By TalkersCode.com</a>
    </div>

</div>
-->

</body>
</html>
