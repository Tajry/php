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
           <input type="text" name="fname" value="" placeholder="กรอกชื่อ" class="form-control my-3" require>
        </div>
        <div class="input-groub">
           <input type="text" name="lname" value="" placeholder="กรอกนามสกุล" class="form-control" required >
        </div>
        <div class="input-groub">
          <label for=""> เพศ</label>
          <input type="radio" name="gender" value="male" required >ชาย
          <input type="radio" name="gender" value="female" required >หญิง
          <input type="radio" name="gender" value="ohter" required >อื่นๆ
        </div>
        <div class="input-groub">
          <label for="">ทักษะ</label>
          <input type="checkbox" name="skill[]" value="adobe"  >adobe
          <input type="checkbox" name="skill[]" value="office"  >office
          <input type="checkbox" name="skill[]" value="grahpic"  >grahpic
          <input type="checkbox" name="skill[]" value="ohter"  >ohter
        </div>
        <input type="submit" name="submit" value="บันทึก" class="btn btn-primary my-3">
        <input type="reset" name="" value="รีเชต" class="btn btn-danger my-3" >
      </form>
    </div>
  </body>
</html>
