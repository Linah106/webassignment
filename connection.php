<?php

$servername="localhost";
$username="root";
$password="";
$dbname="form";

//Creaate connection........
$con=mysqli_connect($servername,$username,$password,$dbname);

//Check connection....
if(!$con){
  die("Connection error ".mysqli_connect_error());
}else{
}

 ?>
