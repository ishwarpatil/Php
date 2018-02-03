<?php

    session_start();
error_reporting(0);

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
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="friendLists.php">Friends</a></li>
            <li style="float: left;margin-left: 5%;font-family: 'Times New Roman'"><a href="">Photos</a></li>


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

                $sql="SELECT * FROM userpost where id=$_SESSION[id]";

                if(!$result = $con->query($sql))
                {
                    echo "Error".mysqli_error();
                }

                while($row=$result->fetch_assoc())
                { ?>

                    <div id="name" style="width:35%;margin-top: 2%;">
                        <?php

                            include 'Connection.php';
                            $t=0;
                            $sql1="SELECT * FROM `profilephoto` where id=$_SESSION[id] ORDER by pid DESC limit 1";

                            if(!$result1 = $con->query($sql1))
                            {
                                echo "Error".mysqli_error();
                            }

                            while($row1=$result1->fetch_assoc()) {
                                $_SESSION["image"] = $row1['image'];
                                $t=1;
                            }
                            if($t==1)
                            {
                                echo '<img src="images/'.$_SESSION["image"].'" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"><span style="margin-left: 10px;font-size: 25px;color: black;">';
                                echo $_SESSION["firstName"]." ".$_SESSION["lastName"];
                            }
                            else
                            {
                                echo '<img src="images/blank.jpg" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"><span style="margin-left: 10px;font-size: 25px;color: black;">';
                                echo $_SESSION["firstName"]." ".$_SESSION["lastName"];
                            }

                        ?>
                    </div>

                    <div id="description" style="text-align: left;margin-left: 6%;margin-top: 2%;text-align: justify;padding: 10px;"><?php echo $row['postDescription']; ?></div>
                    <div id="postImg" ><img src="Images/<?php echo $row['postImage']; ?>" style="border: 1px solid black;width: 90%;margin-left: 5%;margin-top: 1%;height: 100%"></div>

                    <div id="likes">
                        <i style="color: black;"><h2>Likes :- <?php echo $row['likes']; ?></h2></i>
                        <ul style="list-style: none;">
                            <li style="float: left"><a href="likes.php?userId=<?php echo $_SESSION["pid"];?>"><img src="Images/like.png" width="50px" height="50px"></a>Like</li>
                            <li style="float: left;margin-left: 25%"><a href=""><img src="Images/comm.jpg" width="50px" height="50px"></a>Comment</li>
                            <li style="float: left;margin-left: 25%"><a href=""><img src="Images/share.png" width="50px" height="50px"></a>Share</li>
                        </ul>
                    </div>
                    <div id="clear"></div>
                <?php   }
            ?>

        </div>
    </div>
    <div id="clear"></div>
</div>

</body>
</html>
