<?php
        include 'Connection.php';
        include 'insertData.php';
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
                    <th>City :- <th>
                    <td><input type='text' name='city'><span></span></td>
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
        $city=$_POST['city'];

        insertData($name,$city);
    }

    echo '<br><br><br><h2><a href="displayPro.php">Display Records...</a></h2>';

?>
