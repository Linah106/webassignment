<?php
session_start();
    include 'connection.php';//insert connection...

if(isset($_POST['register'])){
    $fName=$_POST['first_name'];
    $mName=$_POST['middle_name'];
    $sName=$_POST['sur_name'];
    $addres=$_POST['user_address'];
    $email=$_POST['user_email'];
    $phone=$_POST['phone'];
    $media=$_POST['media'];
    $user=$_POST['user_name'];
    $pass=$_POST['user_pass'];
    $cv=$_POST['cv'];

    $sql="INSERT into register(firstName,middleName,surName,username,password,cv,email,phone,account)
    VALUES('$fName','  $mName','$sName','$user','$pass','  $cv','$email','$phone','$media')";

    $result = mysqli_query($con,$sql);

    if($result){
        $_SESSION['success'] = "User Registered Successfully";
        $_SESSION['user'] = $_POST['user_email'];
        header('location:course.php');
    }else{
      echo "Something error..".mysqli_connect_error();
    }




}





     ?>
<?php

include('navbar.php');

?>
  <div class="welc">

  </div>
    <div class="menu">
      <div class="headerform">
      <h1>Register form</h1>
    </div>
    <form class="myform" action="register.php" method="POST">
      <div class="input-group">

        <input type="text" name="first_name" value="" placeholder="First name">
      </div>
      <div class="input-group">

        <input type="text" name="middle_name" value="" placeholder="Middle name">
      </div>
      <div class="input-group">
        <input type="text" name="sur_name" value="" placeholder="Surname name">
      </div>

      <div class="input-group">

        <input type="text" name="user_address" value="" placeholder="Address">
      </div>
      <div class="input-group">

        <input type="email" name="user_email" value="" placeholder="Email">
      </div>
      <div class="input-group">

        <input type="number" name="phone" value="" placeholder="Mobile phone number">
      </div>
      <div class="input-group">

        <input type="text" name="media" value="" placeholder="account social media">
      </div>
      <div class="input-group">

        <input type="text" name="user_name" value="" placeholder="Username">
      </div>
      <div class="input-group">
        <input type="password" name="user_pass" value="" placeholder="Password">
      </div>
      <div class="input-group">
        <label for="">CV</label>
        <input type="file" name="cv" value="" placeholder="CV">
      </div>
      <div class="input-group">

        <button type="submit" name="register" class="btn">Register</button>
      </div>
      Already a member? <a href="login.php">Login</a>
    </form>


</div>

<?php
include('footer.php');
?>