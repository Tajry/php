<?php

require('connect.php');

$id =  $_GET['id'];
$sql = "DELETE FROM em WHERE id = $id";

$delete =  mysqli_query($con , $sql);

if($delete){
  header('location:showdata.php');
}



 ?>
