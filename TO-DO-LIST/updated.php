<?php
include 'connection.php';
$id=$_GET['id'];


$title=$_POST['title'];
$description=$_POST['desc'];



$sql1="UPDATE `task` SET `title` = '$title', `description` = '$description' WHERE `task`.`sno` = $id;";


$res=mysqli_query($conn,$sql1);
if($res){
    
    
    header('location:index.php');
}



?>