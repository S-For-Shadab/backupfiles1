<?php
include 'connection.php';
$id=$_GET['id'];
$sql2="SELECT * FROM `todolist`.`task` where `sno`=$id;";




$result=mysqli_query($conn,$sql2);

$row=mysqli_fetch_array($result);

    $title=$row['title'];;
    $description=$row['description'];
    $time=$row['Time'];
$sql1="INSERT INTO `complete` ( `title`, `description`,
`time`) VALUES ('$title', '$description','$time');";
$res1=mysqli_query($conn,$sql1);

$sql="DELETE FROM `task` WHERE `task`.`sno` = $id;";
$res=mysqli_query($conn,$sql);


if($res){
    header('location:index.php');
}



?>