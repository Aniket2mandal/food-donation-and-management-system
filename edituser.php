<?php
session_start();
$ID=$_SESSION['ID'];
include "config.php";
$firstname=$_POST['fnam'];
// $lastname=$_POST['lnam'];
$email=$_POST['emai'];
$sql=mysqli_query($connection,"UPDATE `login` SET `fullname`='$firstname',
`email`='$email' WHERE `id`=$ID");
if($sql == true){
    $_SESSION['error']="User Information Updated Sucessfully";
header("location:adminindex.php");
}
else{
    $_SESSION['error']="Unable To Update User Informations";
    header("location:edituser.php");
}
?>