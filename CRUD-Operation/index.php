<?php

include("config/database.php");

if(isset($_POST["submit"])){
    extract($_POST);


    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO users (username, password, created_at) VALUES ('$username','$password', '$date')";
    
    // $result = $conn->query($sql);
    if($conn->query($sql) === TRUE){
        echo "User has been created";
    }else{
        echo "Something went wrong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<h1>Register Form</h1>
    <div class="main">
      
        <form method="POST">
            <label>User Name </label><br>
            <input type="text" name="username" placeholder="Name" required><br>
            <label > Password</label><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="submit">Add User</button>
        </form>
    </div>
</body>

<style>
    .main{
        border: 1px solid grey;
        padding: 10px;
        width: 30%;
        /* display: flex;
        align-items: center;
        justify-content: center; */
    }
    .main input{
        background-color: lightblue;
        border: none;
        padding:10px;
        margin: 10px 0px;
    }
    .main button{
       background-color: green;
       border: none;
       color: white;
       padding: 10px 20px ;
       cursor: pointer;
    }
</style>
</html>
