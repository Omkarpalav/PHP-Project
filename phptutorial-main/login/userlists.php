<?php 
include('config/dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="background-color: #34495e;">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 50%;
        margin: 50px auto;
        border-collapse: collapse;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
        color: black;
    }

    td>form {
        display: flex;
    }
    </style>
</head>

<body style="
    font-family: 'Lato', sans-serif;
    color: #fff;
">

    <body>
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php 
            if($_SESSION['logstatus']){
                
                $sql="SELECT * FROM user";
            $res=$conn->query($sql);
            while($row=$res->fetch_assoc()){
                echo "<tr><td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td>".$row['date']."</td>
            <td><form method='post' action='delete.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button type='submit' class='delete-btn' name='submit'>Delete</button>
            </form>
            <form method='post' action='update.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button type='submit' class='delete-btn' name='submit'>Update</button>
            </form>
            
            </td></tr>"; }
            
            
            }
            else{
                header('location:login.php');
            }
            ?>

        </table>

    </body>

</html>