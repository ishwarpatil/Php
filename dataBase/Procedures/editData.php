<?php

include 'Connection.php';

function updateData($id,$name,$city)
{
    $insert = " call dept_update('".$id."','".$name."','".$city."') ";
    $result = mysqli_query($GLOBALS['con'],$insert);

    if($result)
    {
        echo "Record Edit Successfully...";
    }
    else
    {
        echo "Record Not Edit Successfully...".mysqli_error();
    }
}

?>