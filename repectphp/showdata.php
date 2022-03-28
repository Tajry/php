<?php

require('connect.php');

$query1 = "SELECT * FROM em "  ;
$result = mysqli_query($con , $query1);

$query2 = "SELECT * FROM em "  ;
$result2 = mysqli_query($con , $query2);

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>databeass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
  <body>
    <style media="screen">
      .show{
        padding: 5px 10rem;
      }
    </style>
  <div class="show">
    <h1>Databaess</h1>
    <table class="table my-3">
      <thead class="table-dark ">
        <tr>
          <th>id</th>
          <th>fname</th>
          <th>lname</th>
          <th>gender</th>
          <th>skill</th>
          <th>edit</th>
          <th>delete</th>
          <th>check</th>
        </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>

        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php if($row['gender'] == "male"){?>
            ชาย
          <?php }elseif ($row['gender'] == "female"){?>
            หญิง
          <?php }else{ ?>
            อื่นๆ
          <?php } ?>
        </td>







        <td><?php echo $row['skill'] ?></td>
        <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" >edit </a> </td>
        <td><a href="delete.php?id=<?php echo $row['id'] ?>"class="btn btn-danger">delete</a> </td>

        <form class="" action="deleteall.php
        " method="post">
          <td> <input type="checkbox" name="check[]" value="<?php echo $row['id'] ?>"> </td>

      </tr>
        <?php } ?>

    </table>
    <input type="submit" name="submit" value="ลบ" >
  </form>

  </div>

  </body>
</html>
