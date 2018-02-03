<?php

    namespace Emp
    {
        class emp
        {
            function __construct()
            {
                echo "I Am Emp nameSpace";
            }
        }
    }

    namespace
    {
        class emp
        {
            function __construct()
            {
                echo "I Am Global nameSpace";
            }
        }
        //use Emp\emp as emp1;
        $obj = new Emp\emp();
    }

?>