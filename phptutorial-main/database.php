<?php 
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="emp";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error) echo "the connection got this error ".$conn->connect_error;
    else echo "Connected successfully";
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD']==='POST'){
           
        }}
        
?>