<?php

include 'connection.php';

$title=$_POST['title'];
$description=$_POST['desc'];

$sql="INSERT INTO `task` ( `title`, `description`) VALUES ('$title', '$description');";


$res=mysqli_query($conn,$sql);
if($res){
    echo "successfully in serted";
    header('location:index.php');
}




?>