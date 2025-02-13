<?php 
include('config/dbconn.php');
session_start();
$_SESSION['login']=false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .form {
        width: 300px;
        background-color: #fefefe;
        margin: 100px auto;
        padding: 30px;
        border: 1px solid #888;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .form input[type="text"],
    .form input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password"><br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql="INSERT INTO `user` (`username`,`password`) VALUES ('$username','$password')";
        $res=$conn->query($sql);
        if($res){
            echo "<script> alert('user has been created');</script>";
            header('location:userlists.php');
            
        }
        else {
            echo "<script> alert('there is error');</script>";
            
            header('location:user.php');
           
            
        }
        }
    ?>
</body>

</html>