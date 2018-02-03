<?php
        include 'Connection.php';
        include 'deleteData.php';

        $id=$_GET['id'];

        deleteData($id);

        header('location:displayPro.php');

?>