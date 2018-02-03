<?php

include 'Connection.php';
/*
$sql = "select * from emp";

if(!$result = $con->query($sql)){
    die('There was an error running the query [' . $con->error . ']');
}
echo '<table border="1" cellpadding="10">';
echo '<tr><th>Id</th><th>Name</th><th>Salary</th></tr>';

while($row= $result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['salary'].'</td>';
    echo '</tr>';
}
echo '</table>';
*/
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

    <script>
        function confirm()
        {
            confirm("Do You Want To Delete Record...!!!");
        }
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
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

                <?php

                    $sql = "select * from emp";

                    if(!$result = $con->query($sql)){
                       die('There was an error running the query [' . $con->error . ']');
                    }

                    while($row= $result->fetch_assoc())
                    {
                        echo "
                            <tr>
                                <td><input type='checkbox' name=id[] value=$row[id]></td>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[salary]</td>
                                <td><a href='Get.php?id=$row[id]&name=$row[name]&salary=$row[salary]'>Edit</a></td>
                                <td><a href='Delete.php?id=$row[id]'>Delete</a></td>
                            </tr>
                        ";
                    }

                ?>

            <tfoot>
                <tr>
                    <th>Checked</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Salary</th>
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
    <h2><a href="Insert.php">Insert Records...</a></h2>
</body>
</html>

<?php

    if(isset($_REQUEST['Submit']))
    {
        $id=$_POST['id'];

        foreach($id as $x=>$value)
        {
            $sql = "delete from emp where id=$value";
            if(!$result=$con->query($sql))
            {
                die('There was an error running the query [' . $con->error . ']');
            }
        }

        header('location:Display.php');
    }

?>