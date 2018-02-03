<?php

$con = new mysqli('localhost', 'root', '', 'ishwar');

if($con->connect_errno > 0)
{
    echo "Not Connect".$con->connect_error;
}


?>