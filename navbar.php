<?php
session_start();

if(isset($_SESSION['user'])){ ?>
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
  </div>
<? 
}else{
?>
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
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="contact.php">Contact</a></li>

            <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>


            </li>
          </ul>
  </div>
  <?php
}
?>