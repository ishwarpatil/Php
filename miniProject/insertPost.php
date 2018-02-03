<?php

    include 'Connection.php';

    function insertPost($id,$pt,$pd,$pi)
    {
        $sql = " call insert_post('".$id."','".$pt."','".$pd."','".$pi."') ";
        $result = mysqli_query($GLOBALS['con'],$sql);

        if($result)
        {
            echo "Successfully New Post Created...!!!";
        }
        else
        {
            echo "Not Successfully New Post Created...!!!";
        }

    }

?>