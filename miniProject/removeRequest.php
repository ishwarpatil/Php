<?php

    include 'Connection.php';

    $id=$_GET['id'];

    $sql=" delete from friendrequest where id=$id ";

    if(!$result = $con->query($sql))
    {
        echo "Error".mysqli_error();
    }

    header('location:mainHomePage.php');

?>