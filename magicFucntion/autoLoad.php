<?php

    function __autoload($className)
    {
        include_once "classes/$className.php";
    }

    $a = new abc();
?>

