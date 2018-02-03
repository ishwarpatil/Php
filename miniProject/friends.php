<?php

    include 'Connection.php';

    $id=$_GET['id'];
    $image=$_GET['image'];
    $firstName=$_GET['firstName'];
    $lastName=$_GET['lastName'];



    $sql="insert into friendlist(id,image,firstName,lastName) VALUES($id,'$image','$firstName','$lastName')";

    if(!$result = $con->query($sql))
    {
        echo "Error".mysqli_error();
    }

    $sql1=" delete from friendrequest where id=$id and firstName='$firstName' and lastName='$lastName' ";

    if(!$result1 = $con->query($sql1))
    {
        echo "Error".mysqli_error();
    }

    header('location:mainHomePage.php');

?>