<?php

     include 'Connection.php';
     include 'insertPro.php';

     $fname = $_POST['firstname'];
     $lname = $_POST['surname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $birthday = $_POST['day']."-".$_POST['month']."-".$_POST['year'];
     $gender = $_POST['gender'];

     insertData($fname,$lname,$email,$password,$birthday,$gender);

     header('location:homePage.php');

?>