
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

/*

if(isset($_SESSION['']))
{
  header('location:v.php');

} 

*/



include 'connection.php';//insert connection...

if(isset($_POST['button'])){
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
    $sql="SELECT * From register where `username` = '$user' and `password`='$pass'";

    $result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);
    if($rows>0){
        $_SESSION['success'] = "User Registered Successfully";
        $_SESSION['user'] = $_POST['username'];
        header('location:course.php');
    }else{
      echo "login error ".mysqli_connect_error();
      exit;
    }




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