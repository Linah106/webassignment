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
    
    $query = "SELECT * FROM course";
        $result = mysqli_query($con,$query);
    
          
    
    
    


?>

  <div class="welc">

  </div>
    <div class="menu">
      <div class="headerform">
      <form action="course.php" method="get">
        <button type="submit" name="view courses">register course</button>
      </form>
      <h1>Course register</h1>
    </div>
    <div class="myform" action="#" method="POST">
     <table border="1">
     <?php $d = 1; while($row = mysqli_fetch_array($result)) {?>
        <tr>
        <td><?php echo $d; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['code']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['semester']; ?></td>
        <td><?php echo $row['year']; ?></td>
        </tr>
        <?php 
        $d++;
     }
        ?>
     </table>

    </div>


</div>
<?php
include('footer.php');
?>