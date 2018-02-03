<?php

    include 'Connection.php';

    session_start();

    $t=0;
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "select * from userinfo";

    if(!$result=$con->query($sql))
    {
        die('There was an error running the query [' . $con->error . ']');
    }

    while($row = $result->fetch_assoc())
    {
        if($email==$row['mobile_email'] && $password==$row['password'])
        {
            $_SESSION["id"] = $row['id'];
            $_SESSION["firstName"] = $row['firstName'];
            $_SESSION["lastName"] = $row['lastName'];
            $t=1;
        }
    }
    if($t==1)
    {
        header('location:mainHomePage.php');
    }
    else
    {
        header('location:Index.php');
    }






?>