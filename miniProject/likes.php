<?php

    include 'Connection.php';

    $id=$_GET['userId'];

    $sql = "select likes from userpost where postId=$id";

    if(!$result = $con->query($sql))
    {
        echo "Error".mysqli_error();
    }

    $row=$result->fetch_assoc();

    $like=$row['likes'];
    $like=$like+1;
    echo $sql1 = "update userpost set likes=$like where postId=$id";

    if(!$result1 = $con->query($sql1))
    {
        echo "Error".mysqli_error();
    }

    header('location:mainHomePage.php');

?>