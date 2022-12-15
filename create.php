<?php

require("db.php");

if(isset($_POST['submit'])){
    $newname=$_POST['newname'];
    $newimg=$_POST['newimg'];


    $db->query("INSERT INTO items(name, img) VALUES ('$newname','$newimg')");

    echo "<script>
    alert('Created');
    location.href = 'index.php';
    </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
        <input type="text" name="newname"  required placeholder="name of image">
        <br>
        <input type="text" name="newimg" placeholder="url of image">
        <br>

        <button type="submit" name="submit">Create</button>
</form>
    <a href="index.php">Back</a>
</body>
</html>