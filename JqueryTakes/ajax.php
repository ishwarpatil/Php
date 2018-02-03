<?php

    include 'Connection.php';

    error_reporting(0);

    $db = $_GET["database"];
    $table = $_GET["table"];
    $value1 = $_GET["value"];
    $record = $_GET["record"];
    $value = $value1;

    if($db!="")
    {
        $sql = "SHOW TABLES FROM $db";

        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }

         echo "<select id='table' onchange='change_table()'>";
         echo "<option>Select Any One</option>";
         while($row = mysqli_fetch_array($result))
         {
             echo "
                    <option value=$row[0]>$row[0]</option>
                  ";
         }
         echo "</select>";
    }

    if($table!="")
    {
        $sql = "SHOW COLUMNS FROM $table";

        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }

         echo "<div id='select'><select id='multipleSelect' multiple>";
         while($row = mysqli_fetch_array($result))
         {
             echo "
                    <option value=$row[0]>$row[0]</option>
                  ";

         }
         echo "</select><div>";
    }

    $e = explode(" ",$value );
    $s = explode(",",$e[0]);
    if($value1!="")
    {
        $sql = "select $value1";
        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }
         echo "<table border='1' cellpadding='10'>";
         echo "<tr>";
         foreach($s as $x=>$value)
         {
                echo "<th>$value    </th>";
         }
         echo "</tr>";

         while($row = mysqli_fetch_array($result))
         {

             echo "<tr>";
             foreach($s as $x=>$value)
             {
                echo "<td>$row[$value]</td>";
             }
             echo "</tr>";

         }
         echo "</table>";
    }

    if($record!="")
    {
        $sql1 = "SHOW COLUMNS FROM $table";
        $sql2 = "select * from $table where id=$record ";

        if(!$result1=$con->query($sql1))
        {
            die('There was an error running the query [' . $con->error . ']');
        }

        if(!$result2=$con->query($sql2))
        {
            die('There was an error running the query [' . $con->error . ']');
        }

        echo "<table border='1' cellpadding='10'>";
        echo "<tr>";
        $l=0;
        while($row1 = mysqli_fetch_array($result1))
        {
            echo " 
                   <th>$row1[0]</th>  
                   <th>$row2[0]</th>   
                 ";
            $l++;

        }
        echo "</tr><tr>";

        echo "</tr>";
        echo "</table>";
    }

?>
