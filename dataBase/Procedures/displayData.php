<?php

include 'Connection.php';

function displayData()
{
    $display = " call dept_display() ";
    $result = mysqli_query($GLOBALS['con'],$display);

    if($result)
    {
        echo "Record Display Successfully...";
    }
    else
    {
        echo "Record Not Display Successfully...".mysqli_error();
    }
}

?>