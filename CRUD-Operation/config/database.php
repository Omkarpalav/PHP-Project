
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "php-tutorial";


$conn = @new mysqli(
    $servername,
    $username,
    $password,
    $dbName
);

// if($conn->connect_error){
//     die("connection failed " . $conn->connect_errno);
// }else{
//     echo "connection Successful !";
// }

?>