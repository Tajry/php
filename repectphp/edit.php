
<?php
 require('connect.php');
$id =  $_GET['id'];

$query1 = "SELECT * FROM em WHERE id = $id "  ;
$result = mysqli_query($con , $query1);

$row = mysqli_fetch_assoc($result);
 $skill_arr = array("adobe","office","grahpic","ohter");


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
     <h1> บันทึกข้อมูล</h1>
    <div class="some_input">
      <form class="form_input" action="form_db.php" method="post">
        <div class="input-groub">
           <input type="text" name="fname" value="<?php echo $row['fname'] ?>" placeholder="กรอกชื่อ" class="form-control my-3" require>
        </div>
        <div class="input-groub">
           <input type="text" name="lname" value="<?php echo $row['lname'] ?>" placeholder="กรอกนามสกุล" class="form-control" required >
        </div>
        <div class="input-groub">
          <label for=""> เพศ</label>
          <?php if($row['gender']== "male") {
            echo "<input type='radio' name='gender' value='male' required checked>ชาย";
            echo "<input type='radio' name='gender' value='female' required >หญิง";
            echo "<input type='radio' name='gender' value='ohter' required >อื่นๆ";
          }elseif ($row['gender']== "female")  {
            echo "<input type='radio' name='gender' value='male' required >ชาย";
            echo "<input type='radio' name='gender' value='female' required checked>หญิง";
            echo "<input type='radio' name='gender' value='ohter' required >อื่นๆ";
          } else {
            echo "<input type='radio' name='gender' value='male' required >ชาย";
            echo "<input type='radio' name='gender' value='female' required >หญิง";
            echo "<input type='radio' name='gender' value='ohter' required checked>อื่นๆ";
          }?>
        </div>
        <div class="input-groub">

          <label for="">ทักษะ</label>
          <?php
            $skiller = explode(",",$row['skill']);
            foreach ($skill_arr as $value ) {
              if(in_array($value,$skiller)){
                echo "<input type='checkbox' name='skill[]'' value='$value'  checked>$value";
              }
              else{
                echo "<input type='checkbox' name='skill[]'' value='$value'  >$value";
              }
            }

           ?>
          <!-- <input type="checkbox" name="skill[]" value="adobe" required >adobe
          <input type="checkbox" name="skill[]" value="office" required >office
          <input type="checkbox" name="skill[]" value="grahpic" required >grahpic
          <input type="checkbox" name="skill[]" value="ohter" required >ohter -->
        </div>
        <input type="submit" name="submit" value="บันทึก" class="btn btn-primary my-3">
        <input type="reset" name="" value="รีเชต" class="btn btn-danger my-3" >
      </form>
    </div>
  </body>
</html>
