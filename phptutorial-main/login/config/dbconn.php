<?php 
$server='localhost';
$username='root';
$password='';
$dbname='users';
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error) echo "conection got error ".$conn->connect_error;
?>