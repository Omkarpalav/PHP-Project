<?php 
session_start();
require("database.php");
if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name=htmlspecialchars($_POST['name']); 
        $id=htmlspecialchars($_POST['id']);
        $address=htmlspecialchars($_POST['address']);
        $number=htmlspecialchars($_POST['number']);

        $sql="INSERT INTO `emp_table`(`id`, `name`, `address`, `phone`) VALUES ($id,'$name','$address',$number)";
        $result=$conn->query($sql);
        if($result){
            header("Location: index.php");
            exit;
        }

    }}
?>