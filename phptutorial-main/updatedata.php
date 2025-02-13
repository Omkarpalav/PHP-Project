<?php 
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="number" name="id" id="id" placeholder="enter the unique id"><br>
        <input type="text" name="name" id="name" placeholder="New Name"><br>
        <input type="submit" value="submit" name="submit"><br>
        <input type="reset" value="reset">
        <?php 
        if(isset($_POST['submit'])){
            $id=htmlspecialchars($_POST['id']);
        $name=htmlspecialchars($_POST['name']);
        $sql="update `emp_table` set `name`='$name' where `id`='$id'";
        $res=$conn->query($sql);
        if($res) echo "done updateing";
        }
        ?>
    </form>
</body>
</html>