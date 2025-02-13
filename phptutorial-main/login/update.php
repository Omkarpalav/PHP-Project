<?php 
include('config/dbconn.php');
session_start();
$id=$_POST['id'];
$_SESSION['id']=$id;
$sql="SELECT * FROM `user` WHERE `id`='$id'";
$res1=$conn->query($sql);
$row1=$res1->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en" style="background-color: #333;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="color: white;">
    <form action="update1.php" method='POST' style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    ">

        <input type="text" name="username" placeholder="New Username" value="<?php echo $row1['username'];?>" required style="
        margin: 10px auto;
        width: 300px;
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        font-size: 18px;
        box-sizing: border-box;
        ">
        <input type="text" name="password" placeholder="New Password" value="<?php echo $row1['password'];?>" required style="
        margin: 10px auto;
        width: 300px;
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        font-size: 18px;
        box-sizing: border-box;
        ">
        <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
        <input type="date" name="date" value="<?php echo $row1['date'];?>" required style="
        margin: 10px auto;
        width: 300px;
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        font-size: 18px;
        box-sizing: border-box;
        ">
        <button type="submit" name="submit" style="
        margin: 10px auto;
        width: 300px;
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        font-size: 18px;
        box-sizing: border-box;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        border: none;
        ">Update</button>

    </form>
</body>

</html>
