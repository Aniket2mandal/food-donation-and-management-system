<?php
include "config.php";
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
// echo $fullname.$email.$password;
$sql=mysqli_query($connection,"INSERT INTO `login`(`fullname`,`email`,`password`)VALUES('$fullname','$email','$password')");
if($sql== true){
   header("location:login.html");
}
?>