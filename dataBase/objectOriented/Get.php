<?php
        include 'Connection.php';

        $id=$_GET['id'];
        $name=$_GET['name'];
        $salary=$_GET['salary'];

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
        <legend align="center">Update</legend>
        <form method='post' action='Edit.php'>
            <table>
                <tr>
                    <td><input type='hidden' name='id' value='<?php echo $id ?>'></td>
                </tr>
                <tr>
                    <th>Name :- <th>
                    <td><input type='text' name='name' value='<?php echo $name ?>'></td>
                </tr>
                <tr>
                    <th>salary :- <th>
                    <td><input type='text' name='salary' value='<?php echo $salary ?>'></td>
                </tr>
                <tr>
                    <td>
                        <input type='reset' value='Reset'>
                        <input type='Submit' name='Submit' value='Update'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>



