<?php
require('connect.php');
 $id =  implode(",",$_POST['check']);
 $sql = "DELETE FROM em WHERE id IN($id)";
 $result = mysqli_query($con, $sql);

echo $result;


 ?>
