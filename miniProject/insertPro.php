<?php

    include 'Connection.php';

    function insertData($fname,$lname,$email,$password,$birthday,$gender)
    {
        $sql = " call insert_userInfo('".$fname."','".$lname."','".$email."','".$password."','".$birthday."','".$gender."') ";
        $result = mysqli_query($GLOBALS['con'],$sql);

        if($result)
        {
            echo "Successfully New Account Created...!!!";
        }
        else
        {
            echo "Not Successfully New Account Created...!!!";
        }

    }

?>