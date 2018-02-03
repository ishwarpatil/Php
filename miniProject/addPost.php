<html>
<head>
    <!--<link rel="stylesheet" href="bootStrap/bootstrap.min.css">
    <script src="bootStrap/jquery.min.js"></script>
    <script src="bootStrap/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        form
        {
            width: 30%;
            margin: 0 auto;
            margin-top: 5%;
        }
    </style>

</head>
<body>

    <fieldset>
        <legend align="center"><h2 style="font-family: 'Arial Black'">Add Post</h2></legend>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Post Title :</label>
                <input type="text" class="form-control" id="email" name="postTitle" placeholder="Enter Post Title">
            </div>
            <div class="form-group">
                <label for="pwd">Post Description :</label>
                <input type="text" class="form-control" id="pwd" name="postdes" placeholder="Enter Post Description">
            </div>
            <div class="form-group">
                <label for="pwd">Feature Image :</label>
                <input type="file" class="form-control" id="pwd" name="img">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <input type="submit" class="btn btn-default" name="Submit" value="Add Post">
        </form>
    </fieldset>

</body>
</html>

<?php

    include 'Connection.php';
    include 'insertPost.php';

    if(isset($_REQUEST['Submit']))
    {
        $userId = $_GET['userId'];
        $postTitle = $_POST['postTitle'];
        $postdes = $_POST['postdes'];

        $file_nm = $_FILES['img']['name'];
        $file_date = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];

        move_uploaded_file($_FILES['img']['tmp_name'],'Images/'.$_FILES['img']['name']);

        insertPost($userId,$postTitle,$postdes,$file_nm);

        header('location:homePage.php');
    }

?>
