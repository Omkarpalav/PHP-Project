<?php
include("config/database.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Users</h1>
    <table>
        <thead>
            <tr>
                <td>Username</td>
                <td>Created At</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td>
                    <a class="edit" href="../edit-user.php ? id=<?php echo $row['username'] ?>">Edit</a>
                    <a class="delete" href="#">Delete</a>
                </td>

            </tr>
            <?php } 
            }else{
                echo "<tr><td colspan='3'>No record found!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<style>
    table{
        border: 1px solid grey;
    }
    thead{
        background-color: green;
        
    }
    td{
        border: 1px solid black;
    }
    a{
        text-decoration: none;
    }
    .edit{
        background-color: blue;
        padding: 4px;
        color: white;
        margin: 5px;
    }
    .delete{
        background-color: red;
        padding: 4px;
        color: white;
    }
</style>
</html>