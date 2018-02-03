<?php
        include 'Connection.php';

        $id=$_GET['id'];

        $sql = "delete from emp where id=$id";

        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }

        header('location:Display.php');

?>