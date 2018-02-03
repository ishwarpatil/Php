<?php

$con = new mysqli('localhost', 'root', '', 'miniproject');

if($con->connect_errno > 0)
{
    echo "Not Connect".$con->connect_error;
}


?>