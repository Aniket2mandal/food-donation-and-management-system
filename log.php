<?php
session_start();
include "config.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($connection,"SELECT `email` FROM `login` WHERE `email`='$email'");
$sqlp=mysqli_query($connection,"SELECT `password` FROM `login` WHERE `email`='$email'");
$sqln=mysqli_query($connection,"SELECT `fullname` FROM `login` WHERE `email`='$email'");
$row=mysqli_num_rows($sql);

if($row>0){
$data=implode(mysqli_fetch_assoc($sql));
$rata=implode(mysqli_fetch_assoc($sqlp));
$rataa=implode(mysqli_fetch_assoc($sqln));
$_SESSION['name']=$rataa;
if($data == $email && $rata == $password){
    if($data == "aayushma123@gmail.com" || $data =="prerna@gmail.com"){
        $_SESSION['username']=$email;
       
                            
        header("location:adminindex.php");

    }
    else{
    $_SESSION['username']=$email;
    header("location:home.php");}
}
else{
    header("location:login.html");
}
}

?>