<?php

include 'Connection.php';
include 'deleteData.php';

?>


<html>
<head>

    <script type="text/javascript" src="dataTables/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="dataTables/dataTables.min.css"/>
    <script type="text/javascript" src="dataTables/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#example').DataTable();
        });
    </script>

</head>
<body>
    <div id="down">
        <select name="applay">
            <option value="one">Select Any One</option>
            <option value="Edit">Edit</option>
            <option value="Delete">Delete</option>
        </select>
    </div>
    <br>
    <br>
    <form method='post'>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Checked</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

                <?php

                    $display = " call dept_display() ";
                    $result = mysqli_query($GLOBALS['con'],$display);

                    //$result = displayData(); not use here this function b/z function not fetch records or not create special file.

                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                            <tr>
                                <td><input type='checkbox' name=id[] value=$row[id]></td>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[city]</td>
                                <td><a href='Get.php?id=$row[id]&name=$row[name]&city=$row[city]'>Edit</a></td>
                                <td><a href='deletePro.php?id=$row[id]'>Delete</a></td>
                            </tr>
                        ";
                    }

                ?>

            <tfoot>
                <tr>
                    <th>Checked</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>

        </table>
        <br><br>
        <input type='Submit' name='Submit' value='More Records Delete...'>
    </form>
    <br>
    <br>
    <br>
    <h2><a href="insertPro.php">Insert Records...</a></h2>
</body>
</html>

<?php

    if(isset($_REQUEST['Submit']))
    {
        $id=$_POST['id'];

        foreach($id as $x=>$value)
        {
            $sql = "delete from dept where id=$value";
            if(!$result=$con->query($sql))
            {
                die('There was an error running the query [' . $con->error . ']');
            }
        }

        header('location:displayPro.php');
    }

?>