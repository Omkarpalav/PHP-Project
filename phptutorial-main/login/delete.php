<?php 
include('config/dbconn.php');
$id = intval($_POST['id']);
if(isset($_POST['submit'])){
    
    $sql="DELETE FROM `user` WHERE id = '$id'";
    $res=$conn->query($sql);
    if($res){
    echo "Deleted the row";
    header('location:userlists.php');
    }
    else echo "Here is some error";
}
?>