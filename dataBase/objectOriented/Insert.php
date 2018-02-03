<?php
        include 'Connection.php';
?>

<html>
<head>
<style>
    fieldset
    {
        width:50%;
    }
</style>
</head>
<body>

    <fieldset>
        <legend align="center">Registration</legend>
        <form method='post' action='#'>
            <table>
                <tr>
                    <th>Name :- <th>
                    <td><input type='text' name='name'><span id=''></span></td>
                </tr>
                <tr>
                    <th>salary :- <th>
                    <td><input type='text' name='salary'><span></span></td>
                </tr>
                <tr>
                    <td>
                        <input type='reset' value='Reset'>
                        <input type='Submit' name='Submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>

<?php

    if(isset($_REQUEST['Submit']))
    {
        $name=$_POST['name'];
        $salary=$_POST['salary'];

        $sql = "insert into emp(name,salary) values('$name','$salary')";

        if(!$result=$con->query($sql))
        {
            die('There was an error running the query [' . $con->error . ']');
        }
    }

    echo '<br><br><br><h2><a href="Display.php">Display Records...</a></h2>';

?>
