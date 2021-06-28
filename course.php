<!Doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Layout</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="form.css">

  </head>
  <body>
    <div class="main">
  <div class="header">
      <h1 style="color:orange;">CV Store</h1>
          <ul>
            <li><a href="index.php" class="active">Home</a></li>

            <li><a href="course.php" class="active">Courses</a></li>
            <li><a href="about.php" class="active">CV</a></li>
            <li><a class="active" href="logout.php">Logout</a></li>


            </li>
          </ul>
  </div><?php

    include 'connection.php';//insert connection...
    if(isset($_POST['send'])){
session_start();
        $name = $_SESSION['user'];
        $course=$_POST['course'];
        $code=$_POST['number'];
        $description=$_POST['corse_descrp'];
        $department=$_POST['department'];
        $semester=$_POST['semester'];
        $year=$_POST['year'];
    
        $sql="INSERT into course(course,code,description,department,semester,year)
        VALUES('  $course','$code','$description','$department','  $semester','$year')";
    
        $result = mysqli_query($con,$sql);
    
        if($result){
           
echo "Data saved successfully!"; 

}else{
          echo "Something error..".mysqli_connect_error();
        }
    
    
    
    
    }


?>

  <div class="welc">

  </div>
    <div class="menu">
      <div class="headerform">
      <form action="regcourses.php" method="get">
        <button type="submit" name="view courses">view courses</button>
      </form>
      <h1>Course register </h1>
    </div>
    <form class="myform" action="#" method="POST">
      <div class="input-group">
        <label for="">Course</label>
      <select class="" name="course">
        <option value="cs171">Networking</option>
        <option value="cs173">Bussiness Communication</option>
        <option value="is181">Web Programming</option>
      </select>
      </div>
      <div class="input-group">
        <label for="course code"></label>
      <select class="" name="number">
        <option value="net">CS171</option>
        <option value="buss">CS173</option>
        <option value="web">IS181</option>
      </select>
      </div>
      <div class="input-group">
        <label for="description"></label>
<textarea name="corse_descrp" rows="8" cols="10"></textarea>
      </div>
      <div class="input-group">
        <label for="">Department</label>
      <select class="" name="department">
        <option value="">Select Department</option>
        <option value="cse">Computer Science and Engineering</option>
        <option value="ete">Electronic and Telecommunication Engineering</option>
        <option value="ds">Deevlopment Perspective</option>
      </select>
      </div>
      <div class="input-group">
        <label for="">Semester</label>
      <select class="" name="semester">
        <option value="one">I</option>
        <option value="two">II</option>
        <option value="three">III</option>
        <option value="four">IV</option>
        <option value="five">V</option>
        <option value="six">VI</option>
        <option value="seven">VII</option>
        <option value="eight">VIII</option>
      </select>
      </div>
      <div class="input-group">
        <label for="Year">Year</label>
      <select class="" name="year">
        <option value="year1">2018/2019</option>
        <option value="year2">2019/2020</option>
        <option value="year3">2020/2021</option>

      </select>
      </div>


      <div class="input-group">

        <button type="submit" name="send" class="btn">Save</button>
      </div>

    </form>


</div>
<?php
include('footer.php');
?>