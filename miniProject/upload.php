<html>
<haed>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</haed>
<body>

    <fieldset>
        <legend align="center"><h2 style="font-family: 'Arial Black'">Add Profile</h2></legend>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Profile Upload :</label>
                <input type="file" class="form-control" id="email" name="img">
            </div>
            <input type="submit" class="btn btn-default" name="Submit" value="Add Post">
        </form>
    </fieldset>

</body>
</html>

<?php

    include 'Connection.php';

    if(isset($_REQUEST['Submit']))
    {
        $img = $_POST['img'];
        $userId = $_GET['userId'];
        $file_nm = $_FILES['img']['name'];
        $file_date = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];

        move_uploaded_file($_FILES['img']['tmp_name'],'Images/'.$_FILES['img']['name']);

        $sql = "insert into profilephoto(id,image) VALUES($userId,'$file_nm')";

        if($result = $con->query($sql))
        {
            echo "Error...".mysqli_error();
        }

        header('location:homePage.php?path='.$file_nm);

    }


?>