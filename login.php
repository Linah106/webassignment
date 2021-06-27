<?php
session_start();
include 'connection.php';//insert connection...

if(isset($_POST['register'])){
    
    $user=$_POST['user_name'];
    $pass=$_POST['user_pass'];
    

    $sql="SELECT From register where `username` = '$user' and `password`='$pass'";

    $result = mysqli_query($con,$sql);

    if($result){
        $_SESSION['success'] = "User Registered Successfully";
        $_SESSION['user'] = $_POST['user_name'];
        header('location:course.php');
    }else{
      echo "Something error..".mysqli_connect_error();
    }




}


?>
<?php
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
            <li><a href="logout.php">Logout</a></li>


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
        <div class="welc">

        </div>
          <div class="menu">
            <div class="headerform">
      <h1>Login form</h1>
    </div>
    <form class="myform" action="login.php" method="post" autofocus="true">
      <div class="input-group">

        <input type="text" name="username" value="" placeholder="Username">
      </div>
      <div class="input-group">

        <input type="password" name="password" value="" placeholder="Password">
      </div>
      <div class="input-group">
        <button type="submit" name="button" class="btn">Login</button>
      </div>
      Not yet a member ? <a href="register.php">Register</a>
    </form>
  </body>
      </div>

<?php
include('footer.php');
?>