<?php

        include 'Connection.php';
        include 'editData.php';

        $id=$_POST['id'];
        $name=$_POST['name'];
        $city=$_POST['city'];

        updateData($id,$name,$city);

        header('location:displayPro.php');

?>