<?php

session_start();

?>


<html>
<head>
    <link href="fbCss.css" type="text/css" rel="stylesheet"/>

    <script>

        function tt()
        {
            var dt=document.getElementById("t");
            dt.innerHTML="Confirm";
        }

    </script>

</head>
<body>

<div id="header_wrapper1" style="height: 5%">
    <div id="header1">
        <img src="images/serach.png" id="img1">
        <?php

        include 'Connection.php';

        $t=0;
        $sql="SELECT * FROM `profilephoto` where id=$_SESSION[id] ORDER by pid DESC limit 1 ";

        if(!$result = $con->query($sql))
        {
            echo "Error".mysqli_error();
        }

        while($row=$result->fetch_assoc()) {
            $_SESSION["image"] = $row['image'];
            $t=1;
        }
        if($t==1)
        {
            echo '<a href="mainHomePage.php"><img src="images/'.$_SESSION['image'].'" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"></a><span style="margin-left: 10px;font-size: 25px;color: white;">';
        }
        else
        {
            echo '<a href="mainHomePage.php"><img src="images/blank.jpg" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"></a><span style="margin-left: 10px;font-size: 25px;color: white;">';
        }
        echo $_SESSION["firstName"]." ".$_SESSION["lastName"];

        ?>
        <div style="float: left;">Home</div>
        <img src="images/request.png" height="35" id="img2">
    </div>
    <span style="float: left;"><h3><a href="logout.php">Logout</a></h3></span>
    <div id="clear"></div>
</div>

<div id="wrapper1">
    <div id="profile"></div>
    <div id="tabs">
        <ul style="list-style: none;font-size: 40px;position: absolute;margin-left: 20%;width: 50%;margin-top: -0.00px">
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="addPost.php?userId=<?php echo $_SESSION["id"];?>">Add_Post</a></li>
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="">About</a></li>
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="">Friends</a></li>
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="homePage.php">Posts</a></li>


        </ul>
    </div>
    <div id="photo">
        <a href="upload.php?userId=<?php echo $_SESSION["id"];?>">
            <?php

            include 'Connection.php';
            $t=0;
            $sql="SELECT * FROM `profilephoto` where id=$_SESSION[id] ORDER by pid DESC limit 1";

            if(!$result = $con->query($sql))
            {
                echo "Error".mysqli_error();
            }

            while($row=$result->fetch_assoc()) {
                $_SESSION["image"] = $row['image'];
                $t=1;
            }
            if($t==1)
            {
                echo "<img src=images/$_SESSION[image]>";
            }
            else
            {
                echo "<img src=images/blank.jpg>";
            }


            ?>
        </a>
    </div>
    <div id="showPost">
        <div id="sitebar">
            <div id="d1">

            </div>

            <div id="d2">

            </div>

            <div id="d3"></div>
        </div>
        <div id="posts">

            <?php

                include 'Connection.php';
                $sql="SELECT * FROM friendlist WHERE id=$_SESSION[id]";

                if(!$result = $con->query($sql))
                {
                    echo "Error".mysqli_error();
                }

                echo "<table cellpadding='8'>";
                while($row=$result->fetch_assoc()) {

                    echo "
                            <tr>
                                <th><img src='Images/$row[image]' style='width: 30px;height: 30px;border-radius: 55px;'></th>
                                <th>$row[firstName]  $row[lastName]</th>
                                <th>&#10004; Friend</th>
                            </tr>
                        
                        ";

                }
                echo "</table>";


            ?>

        </div>
    </div>
    <div id="clear"></div>
</div>

</body>
</html>
