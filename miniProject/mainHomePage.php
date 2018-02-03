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
            dt.innerHTML="Send Request";
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
                echo '<a href="homePage.php"><img src="images/'.$_SESSION['image'].'" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"></a><span style="margin-left: 10px;font-size: 25px;color: white;">';
            }
            else
            {
                echo '<a href="homePage.php"><img src="images/blank.jpg" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"></a><span style="margin-left: 10px;font-size: 25px;color: white;">';
            }
            echo $_SESSION["firstName"]." ".$_SESSION["lastName"];

        ?>
        <img src="images/request.png" height="35" id="img2">

    </div>
    <span style="float: left;"><h3><a href="logout.php">Logout</a></h3></span>
    <div id="clear"></div>
</div>

<div id="wrapper1">

    <div id="showPost">
        <div id="sitebar">
            <div id="d1">
                <?php

                    include 'Connection.php';

                    $sql="SELECT * FROM `userinfo` WHERE id not in (select id from userinfo where id=$_SESSION[id])";


                    if(!$result = $con->query($sql))
                    {
                        echo "Error".mysqli_error();
                    }

                    echo "<fieldset><legend align='center'><h3>Friend Suggestions</h3></legend>";
                    echo "<table cellpadding='8'>";
                    while($row=$result->fetch_assoc())
                    {
                        $sql1="SELECT * FROM `profilephoto` where id=$row[id] ORDER by pid DESC limit 1";
                        if(!$result1 = $con->query($sql1))
                        {
                            echo "Error".mysqli_error();
                        }
                        $row1=$result1->fetch_assoc();
                        echo "
                                <tr>
                                <th><img src='Images/$row1[image]' style='width: 30px;height: 30px;border-radius: 55px;'></th>
                                <th>$row[firstName]  $row[lastName]</th>
                                <th><a href='friendRequest.php?id=$row1[id]&image=$_SESSION[image]&firstName=$_SESSION[firstName]&lastName=$_SESSION[lastName]'><button>Add Friend</button></a> </th>
                                </tr>
                            ";
                    }
                    echo "</table>";
                    echo "</fieldset>";

                ?>
            </div>

            <div id="d2">
                <?php

                    include 'Connection.php';

                    $sql=" select * from friendrequest where id=$_SESSION[id] ";

                    if(!$result = $con->query($sql))
                    {
                        echo "Error".mysqli_error();
                    }

                    echo "<fieldset><legend align='center'><h3>Friend Request</h3></legend>";
                    echo "<table cellpadding='8'>";
                    while($row=$result->fetch_assoc())
                    {
                        echo "
                            <tr>
                            <tr>
                            <th><img src='Images/$row[image]' style='width: 30px;height: 30px;border-radius: 55px;'></th>
                            <th>$row[firstName]  $row[lastName]</th>
                            <th><a href='friends.php?id=$_SESSION[id]&image=$row[image]&firstName=$row[firstName]&lastName=$row[lastName]'><button>Confirm Request</button></a></th>
                            <th><a href='removeRequest.php?id=$_SESSION[id]'><button>Remove</button></a></th>
                            </tr>
                        ";
                    }
                    echo "</table>";
                    echo "</fieldset>";

                ?>
            </div>

            <div id="d3"></div>
        </div>
        <div id="posts">

            <?php

                include 'Connection.php';

                $sql="SELECT * FROM userpost ";

                if(!$result = $con->query($sql))
                {
                    echo "Error".mysqli_error();
                }

                while($row=$result->fetch_assoc())
                {
                    $_SESSION["postId"] = $row['postId'];
                    ?>

                    <div id="name" style="width:35%;margin-top: 2%;">
                        <?php
                            $sql3 = "SELECT * FROM profilephoto where id=$row[id] ORDER by pid DESC limit 1";
                            if(!$result3 = $con->query($sql3))
                            {
                                echo "Error".mysqli_error();
                            }
                            $row3=$result3->fetch_assoc();
                            echo '<img src="images/'.$row3["image"].'" id="img1" style="width: 30px;height: 30px;border-radius: 55px;"><span style="margin-left: 10px;font-size: 25px;color: black;">';


                            $sql1 = "select * from userinfo where id=$row[id]";
                            if(!$result1 = $con->query($sql1))
                            {
                                echo "Error".mysqli_error();
                            }
                            $row1=$result1->fetch_assoc();
                            echo $row1["firstName"]." ".$row1["lastName"];
                        ?>
                    </div>

                    <div id="description" style="text-align: left;margin-left: 6%;margin-top: 2%;text-align: justify;padding: 10px;"><?php echo $row['postDescription']; ?></div>
                    <div id="postImg" ><img src="Images/<?php echo $row['postImage']; ?>" style="border: 1px solid black;width: 90%;margin-left: 5%;margin-top: 1%;height: 100%"></div>

                    <div id="likes">
                        <i style="color: black;"><h2>Likes :- <?php echo $row['likes']; ?></h2></i>
                        <ul style="list-style: none;">
                            <li style="float: left"><a href="likes.php?userId=<?php echo $_SESSION["postId"];?>"><img src="Images/like.png" width="50px" height="50px"></a>Like</li>
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
