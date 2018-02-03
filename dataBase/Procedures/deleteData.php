<?php

include 'Connection.php';

function deleteData($id)
{
    $insert = " call dept_delete('".$id."') ";
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