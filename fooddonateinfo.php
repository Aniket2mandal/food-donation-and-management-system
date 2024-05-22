<?php
$foodname=$_POST['foodname'];
$mealtype=$_POST['mealtype'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];
$name=$_POST['name'];
$phone=$_POST['phoneno'];
$district=$_POST['district'];
$address=$_POST['address'];
$email=$_POST['email'];
include "config.php";
$sql=mysqli_query($connection,"INSERT INTO `fooddonate`(`foodname`,`mealtype`,`category`,
`quantity`,`name`,`phone`,`district`,`address`,`email`)VALUES('$foodname','$mealtype','$category','$quantity',
'$name','$phone','$district','$address','$email')");
if($sql== true){
    echo "inserted";
    header("location:profile.php");
}
else{
    echo"not inserted";
}
?>