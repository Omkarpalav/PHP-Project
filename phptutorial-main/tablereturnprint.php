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
    <center>
        <table border="1">
            <tr><th>ID</th>
            
                <th>name</th>
            
            
                <th>Address</th>
            
                <th>Number</th>
            </tr>
            <?php 
            $sql="select * from emp_table";
            $res=$conn->query($sql);
            
            while($rows=$res->fetch_assoc()){
                echo "<tr><td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['address']."</td><td>".$rows['phone']."</td></tr>";
            }
            ?>
        </table>
    </center>
</body>
</html>