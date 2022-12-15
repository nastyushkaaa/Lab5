<?php

require("db.php");

if ($_SERVER['REQUEST_METHOD']==='GET'){
    $id = $_GET['id'];
    $item = $db->query("SELECT * FROM items WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
    if (count($item)>0){
        $item = $item[0];
    }


}else if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];
    $newname=$_POST['newname'];
    $newimg=$_POST['newimg'];

    $db->query("UPDATE items SET name='$newname', img='$newimg' WHERE id=$id");

    echo "<script>
    alert('Updated');
    location.href ='index.php';
    </script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update of information</title>
    </head>
    <body>
    <form action="" method="POST">
    <input type="text" name="newname" value="<?php echo $item['name']?>">
    <br>
    <input type="text" name="newimg" value="<?php echo $item['img']?>">

                <!--  -->
        <input type="hidden" name="id" value="<?php echo $item['id']?>">
        <br>
    <button type="submit" name="submit">Save</button>
</form>
    <a href="index.php">Back</a>
</body>
</html>