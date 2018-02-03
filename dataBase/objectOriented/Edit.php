<?php

        include 'Connection.php';

        $id=$_POST['id'];
        $name=$_POST['name'];
        $salary=$_POST['salary'];

        $sql = "update emp set name='$name',salary='$salary' where id=$id";

        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }


        header('location:Display.php');

?>