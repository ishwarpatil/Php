<?php

    include 'Connection.php';

    $id=$_GET['id'];
    $image=$_GET['image'];
    $firstName=$_GET['firstName'];
    $lastName=$_GET['lastName'];



    $sql="insert into friendrequest(id,image,firstName,lastName) VALUES($id,'$image','$firstName','$lastName')";

    if(!$result = $con->query($sql))
    {
        echo "Error".mysqli_error();
    }

    header('location:mainHomePage.php');
?>