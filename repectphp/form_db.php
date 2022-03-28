<?php

require('connect.php');


  $fname =  $_POST['fname'];
  $lname =  $_POST['lname'];
  $gender =  $_POST['gender'];
  $skill =  implode(",",$_POST['skill']);

  $sql = "INSERT INTO em(fname,lname,gender,skill) VALUE('$fname','$lname','$gender','$skill')";

  $result = mysqli_query($con , $sql);

  if($result){
    header('location:form.php');
  }



 ?>
