<?php

include 'Connection.php';

function insertData($name,$city)
{
    $insert = " call dept_insert('".$name."','".$city."') ";
    $result = mysqli_query($GLOBALS['con'],$insert);

    if($result)
    {
        echo "Record Insert Successfully...";
    }
    else
    {
        echo "Record Not Insert Successfully...".mysqli_error();
    }
}

?>